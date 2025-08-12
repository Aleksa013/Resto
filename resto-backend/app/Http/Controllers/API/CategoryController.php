<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ItemController;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends ItemController
{
    protected function model(): string
   {
    return Category::class;
   }

   protected function resource(): string
   {
    return CategoryResource::class;
   }

}
