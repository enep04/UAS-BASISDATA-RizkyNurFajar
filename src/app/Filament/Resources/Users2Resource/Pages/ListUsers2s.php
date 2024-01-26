<?php

namespace App\Filament\Resources\Users2Resource\Pages;

use App\Filament\Resources\Users2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers2s extends ListRecords
{
    protected static string $resource = Users2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
