<?php

namespace App\Filament\Admin\Resources\CharacteristicCategoryResource\Pages;

use Filament\Actions;
use App\DataTransferObjects\MetaData;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\CharacteristicCategoryResource;

class CreateCharacteristicCategory extends CreateRecord
{
    protected static string $resource = CharacteristicCategoryResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['meta_data'] = MetaData::fromArray($data['meta_data']);

        return $data;
    }
}
