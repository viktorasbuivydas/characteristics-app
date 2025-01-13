<?php

namespace App\Models;

use App\Models\Characteristic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CharacteristicCategory extends Model
{
    protected $table = 'characteristic_categories';
    protected $fillable = [
        'name'
    ];

    public function characteristics(): HasMany
    {
        return $this->hasMany(Characteristic::class);
    }
}
