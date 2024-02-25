<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function counter () {
        return view('counter');
    }

    public function calculator () {
        return view('calculator');
    }

    public function todo () {
        return view('todo-list');
    }

    public function cascadingDropdown () {
        return view('cascading-dropdown');
    }

    public function products () {
         return view('product-search');
    }

    public function imageUpload () {
        return view('image-upload');
    }

    public function register () {
        return view('register-form');
    }


}
