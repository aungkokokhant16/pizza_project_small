<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/', [PizzaController::class,'index'])->name("home");
//create
Route::post('/',[PizzaController::class,'insert'])->name("insert");
//read
Route::get('/pizzas', [PizzaController::class,'pizza'] )->name("pizza");
//delete
// Route::get('/pizzas/{id}',function($id){
//     return $id;
// })->name("delete");
Route::get('/pizzas/{id}',[PizzaController::class,"delete"])->name("delete");
//edit form route
Route::get('/pizzas/edit/{id}',[PizzaController::class,"edit"])->name("edit");
//update form route
Route::post('/pizzas/update/{id}', [PizzaController::class,"update"])->name("update");
