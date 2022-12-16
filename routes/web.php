<?php

use App\Http\Controllers\PageController;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Websetting;
use Illuminate\Support\Facades\Route;

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
    return view('welcome')->with('menus',Menu::all())->with('websetting',Websetting::first())->with('pages',Page::all());
})->name('home');
Route::get('/read/{id}',[PageController::class,'show'])->name('page.show');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/page/{id}',[PageController::class,'edit'])->name('pageEditor');
});
