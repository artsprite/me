<?php

namespace App\Filament\Admin\Resources\UserFileResource\Pages;

use App\Filament\Admin\Resources\UserFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserFiles extends ListRecords
{
    protected static string $resource = UserFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
