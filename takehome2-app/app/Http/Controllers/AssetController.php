<?php

namespace App\Http\Controllers;

use App\Models\Asset;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::orderBy('created_at', 'desc')->get();

        return view('assets.index', ['assets' => $assets]);
    }
}
