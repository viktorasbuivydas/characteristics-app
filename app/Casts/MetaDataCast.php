<?php

namespace App\Casts;

use App\DataTransferObjects\MetaData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class MetaDataCast implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes)
    {
        $metadata = MetaData::fromJson($value);
        return $metadata->toArray();
    }

    public function set(Model $model, string $key, mixed $value, array $attributes)
    {
        $metaData = MetaData::fromArray($value);
        return json_encode($metaData->toArray());
    }
}
