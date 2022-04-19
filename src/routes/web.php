<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

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
    return view('welcome');
});

Route::get('/test-db', function () {
    if(DB::connection()->getDatabaseName())
    {
        echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }
});

Route::get('/test-env', function () {
    dd(getenv());
});

Route::get('/test-migrate', function () {
    Artisan::call('migrate --force');
});
