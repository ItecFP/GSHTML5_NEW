<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;

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

Route::get('/', [TagController::class, "getCategories"]);
Route::get("/info", function () {
    return phpinfo();
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/content/ejemplo', function () {
    return view('content');
});

Route::get('/content', [TagController::class, "tag_a"]);
Route::get('/tag/{name}', [TagController::class, "showTag"]);
Route::get('/tags', [TagController::class, "getTags"]);
//Route::get('/categoria/{name}', [TagController::class, "getCategory"]);
Route::get('/categoria/{name}', function ($name) {
    return view("categoriadetails");
});
Route::get('/categorias', [TagController::class, "getCategories"]);
Route::get('/search', [TagController::class, "search"]);


Route::get('/tag_a', [TagController::class, "tag_a"]);
Route::get('/tag_abbr', [TagController::class, "tag_abbr"]);
Route::get('/tag_address', [TagController::class, "tag_address"]);
Route::get('/tag_del', [TagController::class, "tag_del"]);

//prueba de BD Sergio
Route::get('/pruebaBD', [TagController::class, "pruebaMongoSergio"]);
