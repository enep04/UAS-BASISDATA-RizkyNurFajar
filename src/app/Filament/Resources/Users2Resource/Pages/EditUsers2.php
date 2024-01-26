<?php

namespace App\Filament\Resources\Users2Resource\Pages;

use App\Filament\Resources\Users2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsers2 extends EditRecord
{
    protected static string $resource = Users2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
