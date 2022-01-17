<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allFoodItems(){
        return view('admin/food-items/all');
    }
    public function createFoodItems(){
        return view('admin/food-items/create');
    }
    public function editFoodItems(){
        return view('admin/food-items/edit');
    }
}
