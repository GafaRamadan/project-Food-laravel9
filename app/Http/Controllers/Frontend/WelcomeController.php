<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'special')->first();

        return view('welcome', get_defined_vars());
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
