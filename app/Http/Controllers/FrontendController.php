<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class FrontendController extends Controller
{
    /**
     * Create a new co

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider=Slider::all();
        return view('layouts.master')->with('slider',$slider);
    }
}
