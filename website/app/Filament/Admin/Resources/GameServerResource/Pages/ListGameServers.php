<?php

namespace App\Filament\Admin\Resources\GameServerResource\Pages;

use App\Filament\Admin\Resources\GameServerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGameServers extends ListRecords
{
    protected static string $resource = GameServerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
