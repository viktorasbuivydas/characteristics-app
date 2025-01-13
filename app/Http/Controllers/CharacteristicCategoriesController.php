<?php

namespace App\Http\Controllers;

use App\Models\CharacteristicCategory;

class CharacteristicCategoriesController extends Controller
{
    public function index()
    {
        return view('characteristicCategories.index', [
            'characteristicCategories' => CharacteristicCategory::query()
                ->with('characteristics')
                ->get()
        ]);
    }
}
