<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()

    {

        return view('admin-panel.products.list');
    }

    public function creat()

    {

        return view('admin-panel.products.creat');
    }
}


