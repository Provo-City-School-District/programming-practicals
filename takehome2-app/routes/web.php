<?php

use App\Http\Controllers\AssetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AssetController::class, 'index'])->name('assets.index');
