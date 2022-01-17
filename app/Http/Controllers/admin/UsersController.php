<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allUsers(){
        return view('admin/users/all');
    }
    public function createUsers(){
        return view('admin/users/create');
    }
    public function editUsers(){
        return view('admin/users/edit');
    }
}
