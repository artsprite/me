<?php

namespace ContainerEEzbBj8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends AppKernelProdContainer
{
    /*
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['Symfony\\Component\\Process\\Messenger\\RunProcessMessage' => [['process.messenger.process_message_handler', []]], 'Symfony\\Component\\Console\\Messenger\\RunCommandMessage' => [['console.messenger.execute_command_handler', []]], 'Symfony\\Component\\HttpClient\\Messenger\\PingWebhookMessage' => [['http_client.messenger.ping_webhook_handler', []]], 'Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [['mailer.messenger.message_handler', []], ['Mautic\\MessengerBundle\\MessageHandler\\RemoveReportAttachmentHandler', ['priority' => -1000]]], 'Symfony\\Component\\Messenger\\Message\\RedispatchMessage' => [['messenger.redispatch_message_handler', []]], 'Mautic\\MessengerBundle\\Message\\EmailHitNotification' => [['Mautic\\MessengerBundle\\MessageHandler\\EmailHitNotificationHandler', []]], 'Mautic\\MessengerBundle\\Message\\PageHitNotification' => [['Mautic\\MessengerBundle\\MessageHandler\\PageHitNotificationHandler', []]], 'Mautic\\MessengerBundle\\Message\\TestEmail' => [['Mautic\\MessengerBundle\\MessageHandler\\TestHandler', ['method' => 'handleEmail']]], 'Mautic\\MessengerBundle\\Message\\TestHit' => [['Mautic\\MessengerBundle\\MessageHandler\\TestHandler', ['method' => 'handleHit']]], 'Mautic\\MessengerBundle\\Message\\TestFailed' => [['Mautic\\MessengerBundle\\MessageHandler\\TestHandler', ['method' => 'handleFailed']]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
