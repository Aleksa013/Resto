<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ItemController;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;
use App\Models\Drink;


class DrinkController extends ItemController
{
    protected function model(): string
   {
    return Drink::class;
   }
   protected function resource(): string
   {
    return ItemResource::class;
   }

}
