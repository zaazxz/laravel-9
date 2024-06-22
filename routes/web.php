<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Example Web Routes
|--------------------------------------------------------------------------
|
| This is an example for your website routes
| Delete or Comment it if you don't need it
| Created by : Mirza Qamaruzzaman (https://github.com/zaazxz)
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ViewController::class, 'dashboardIndex'])->name('dashboard.index');
Route::get('/dashboard/ecommerce', [ViewController::class, 'dashboardEcommerce'])->name('dashboard.ecommerce');

/*
|--------------------------------------------------------------------------
| Your Custom Web Routes
|--------------------------------------------------------------------------
|
| You can add your custom routes here
| Include your custom API, Controllers, etc.
|
*/