<?php

namespace App\Filament\Admin\Resources\CharacteristicCategoryResource\Pages;

use App\Filament\Admin\Resources\CharacteristicCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCharacteristicCategories extends ListRecords
{
    protected static string $resource = CharacteristicCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
