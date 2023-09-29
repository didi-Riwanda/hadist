<?php

use App\Http\Controllers\HadistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    $data = storage_path('hadist/hadist.json');
    
    return view('welcome', [
        'data' => json_decode(file_get_contents(storage_path() ."/hadist/hadist.json"))
    ]);
});

Route::resource('hadist', HadistController::class);
