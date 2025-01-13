<?php

namespace App\Models;

use App\Casts\MetaDataCast;
use App\Models\CharacteristicCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Characteristic extends Model
{
    protected $fillable = [
        'name',
        'meta_data',
        'characteristic_category_id'
    ];

    protected $casts = [
        'meta_data' => MetaDataCast::class,
    ];

    public function characteristicCategory(): BelongsTo
    {
        return $this->belongsTo(CharacteristicCategory::class);
    }
}
