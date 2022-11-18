<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials/index', [
        "menu" => Menu::all()
    ]);
});

// Route::get('/menu/{category}', function ($category) {
//     return view('partials/single', [
//         "menu" => Menu::find($category)
//     ]);
// });

Route::get('menu/options', function () {
    return view('partials/options');
});