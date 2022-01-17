<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    public function index()
    {
        $packages = TravelPackage::paginate(12);
        return view('home', compact('packages'));
    }
}