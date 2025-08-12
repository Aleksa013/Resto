<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

abstract class ItemController extends Controller
{
    protected abstract function model(): string;
    protected abstract function resource(): string;

    public function index(){
        $modelClass = $this->model();
        $resourceClass = $this->resource();

        $items = $modelClass::with('category')->paginate(10);
        return $resourceClass::collection($items);
    }

    public function getById($id){
        $modelClass = $this->model();
        $resourceClass = $this->resource();

        $item = $modelClass::with('category')->where('id', $id)-> firstOrFail();
        return new $resourceClass($item);
    }

    public function getByName($name) {
        $modelClass = $this->model();
        $resourceClass = $this->resource();

        $item = $modelClass::with('category')->where('name', $name) -> firstOrFail();
       return new $resourceClass($item);
    }

    public function getMostExpensive() {
        $modelClass = $this->model();
        $resourceClass = $this->resource();

        $maxPrice = $modelClass::max('price');
        $item = $modelClass::with('category')->where('price', $maxPrice)->first();
        return new $resourceClass($item);
    }
}
