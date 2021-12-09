<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//GET       /products                   index       products.index
//GET       /products/create            create 	    products.create
//POST      /products 	                store 	    products.store
//GET       /products/{product}         show 	    products.show
//GET       /products/{product}/edit 	edit 	    products.edit
//PUT       /products/{product} 	    update 	    products.update
//DELETE    /products/{product} 	    destroy 	products.destroy
Route::resource('/products', ProductController::class);



