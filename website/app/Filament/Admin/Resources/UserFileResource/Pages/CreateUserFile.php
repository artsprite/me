<?php

namespace App\Filament\Admin\Resources\UserFileResource\Pages;

use App\Filament\Admin\Resources\UserFileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserFile extends CreateRecord
{
    protected static string $resource = UserFileResource::class;
}
