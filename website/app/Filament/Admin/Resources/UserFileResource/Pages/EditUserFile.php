<?php

namespace App\Filament\Admin\Resources\UserFileResource\Pages;

use App\Filament\Admin\Resources\UserFileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserFile extends EditRecord
{
    protected static string $resource = UserFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
