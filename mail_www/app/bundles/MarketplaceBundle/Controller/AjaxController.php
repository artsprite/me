<?php

declare(strict_types=1);

namespace Mautic\MarketplaceBundle\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Mautic\CoreBundle\Controller\AjaxController as CommonAjaxController;
use Mautic\CoreBundle\Factory\ModelFactory;
use Mautic\CoreBundle\Helper\CacheHelper;
use Mautic\CoreBundle\Helper\ComposerHelper;
use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\CoreBundle\Helper\UserHelper;
use Mautic\CoreBundle\Security\Permissions\CorePermissions;
use Mautic\CoreBundle\Service\FlashBag;
use Mautic\CoreBundle\Translation\Translator;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class AjaxController extends CommonAjaxController
{
    public function __construct(
        private ComposerHelper $composer,
        private CacheHelper $cacheHelper,
        private LoggerInterface $logger,
        ManagerRegistry $doctrine,
        ModelFactory $modelFactory,
        UserHelper $userHelper,
        CoreParametersHelper $coreParametersHelper,
        EventDispatcherInterface $dispatcher,
        Translator $translator,
        FlashBag $flashBag,
        RequestStack $requestStack,
        CorePermissions $security,
    ) {
        parent::__construct($doctrine, $modelFactory, $userHelper, $coreParametersHelper, $dispatcher, $translator, $flashBag, $requestStack, $security);
    }

    public function installPackageAction(Request $request): JsonResponse
    {
        $data   = json_decode($request->getContent(), true);

        if (empty($data['vendor']) || empty($data['package'])) {
            return $this->sendJsonResponse([
                'error' => $this->translator->trans('marketplace.package.request.details.missing'),
            ], 400);
        }

        $packageName = $data['vendor'].'/'.$data['package'];

        if ($this->composer->isInstalled($packageName)) {
            return $this->sendJsonResponse([
                'error' => $this->translator->trans('marketplace.package.install.already.installed'),
            ], 400);
        }

        try {
            $installResult = $this->composer->install($packageName);

            if (Command::SUCCESS !== $installResult->exitCode) {
                return $this->installError(new \Exception($installResult->output));
            }
        } catch (\Exception $e) {
            return $this->installError($e);
        }

        // Note: do not do anything except returning a response after clearing the cache to prevent errors
        $clearCacheResult = $this->clearCacheOrReturnError();

        if (null !== $clearCacheResult) {
            return $clearCacheResult;
        }

        return new JsonResponse(['success' => true]);
    }

    public function removePackageAction(Request $request): JsonResponse
    {
        $data   = json_decode($request->getContent(), true);

        if (empty($data['vendor']) || empty($data['package'])) {
            return $this->sendJsonResponse([
                'error' => $this->translator->trans('marketplace.package.request.details.missing'),
            ], 400);
        }

        $packageName = $data['vendor'].'/'.$data['package'];

        if (!$this->composer->isInstalled($packageName)) {
            return $this->sendJsonResponse([
                'error' => $this->translator->trans('marketplace.package.remove.not.installed'),
            ], 400);
        }

        try {
            $removeResult = $this->composer->remove($packageName);

            if (0 !== $removeResult->exitCode) {
                return $this->removeError(new \Exception($removeResult->output));
            }
        } catch (\Exception $e) {
            return $this->removeError($e);
        }

        // Note: do not do anything except returning a response after clearing the cache to prevent errors
        $clearCacheResult = $this->clearCacheOrReturnError();

        if (null !== $clearCacheResult) {
            return $clearCacheResult;
        }

        return new JsonResponse(['success' => true]);
    }

    private function clearCacheOrReturnError(): ?JsonResponse
    {
        try {
            $exitCode = $this->cacheHelper->clearSymfonyCache();

            if (0 !== $exitCode) {
                $this->logger->error('Could not clear Mautic\'s cache. Please try again.');

                return $this->sendJsonResponse([
                    'error' => $this->translator->trans('marketplace.package.cache.clear.failed'),
                ], 500);
            }
        } catch (\Exception $e) {
            $this->logger->error('Could not clear Mautic\'s cache. Details: '.$e->getMessage());

            return $this->sendJsonResponse([
                'error' => $this->translator->trans('marketplace.package.cache.clear.failed'),
            ], 500);
        }

        return null;
    }

    private function installError(\Exception $e): JsonResponse
    {
        $this->logger->error('Installation of plugin through Composer has failed: '.$e->getMessage());

        return $this->sendJsonResponse([
            'error' => $this->translator->trans('marketplace.package.install.failed'),
        ], 500);
    }

    private function removeError(\Exception $e): JsonResponse
    {
        $this->logger->error('Error while removing package through Composer: '.$e->getMessage());

        return $this->sendJsonResponse([
            'error' => $this->translator->trans('marketplace.package.remove.failed'),
        ], 500);
    }
}
