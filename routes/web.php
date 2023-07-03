<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Database\Connectors\PostgresConnector;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{post}', 'show')->where([
        'post' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});
