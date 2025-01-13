<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Characteristic extends Model
{
    protected $fillable = [
        'name',
        'meta_data'
    ];

    public function characteristicCategories(): BelongsToMany
    {
        return $this->belongsToMany(CharacteristicCategory::class);
    }
}
