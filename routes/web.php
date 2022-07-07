<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//   return view('list');
//});


//Route::get('/', [PostController::class, 'list']);

Route::get('/', function () {
   return view('list');   
});

Route::get('list', [PostController::class, 'list']);

Route::get('show', function () {
    return view('show');   
});

Route::post('insertData', [PostController::class, 'create']);
Route::get('create', function() {
    return view('create');
 });

Route::get('/',[PostController::class,'list']);

Route::view('update','updateview');
Route::get('updatedelete',[PostController::class, 'updatedelete']);
Route::get('updatedata',[PostController::class, 'update']);

Route::get('test', function() {
    return view('test');
 });


?>
