<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Product;
use App\Models\Season;


class ContactController extends Controller
{
    public function products()
    {
        return view('products');
    }

    public function search()
    {
        return view('search');
    }

    public function register()
    {
        return view('register');
    }
}
