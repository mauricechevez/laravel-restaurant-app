<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allCategories(){
        return view('admin/categories/all');
    }
    public function createCategory(){
        return view('admin/categories/create');
    }
    public function editCategory(){
        return view('admin/categories/edit');
    }

};
