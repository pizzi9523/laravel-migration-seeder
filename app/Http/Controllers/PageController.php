<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $packages = TravelPackage::all();
        return view('welcome', compact('packages'));
    }
}