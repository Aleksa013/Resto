<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\ItemController;
use App\Http\Resources\ItemResource;
use App\Models\Dish;



class DishController extends ItemController
{
   protected function model(): string
   {
    return Dish::class;
   }

   protected function resource(): string
   {
    return ItemResource::class;
   }

}
