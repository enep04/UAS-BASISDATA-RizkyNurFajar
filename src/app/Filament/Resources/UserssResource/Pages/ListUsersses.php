<?php

namespace App\Filament\Resources\UserssResource\Pages;

use App\Filament\Resources\UserssResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsersses extends ListRecords
{
    protected static string $resource = UserssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
