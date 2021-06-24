<?php
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
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

//Route::resource('/Categorie',CategorieController::class);
Route::get('/Categorie', [CategorieController::class,'index']);
Route::post('/Categorie/store', [CategorieController::class,'store'])->name('Categorie.store');
Route::get('/Categorie/edit/{id}', [CategorieController::class,'edit'])->name('Categorie.edit');
Route::get('/Categorie/update/{id}', [CategorieController::class,'update'])->name('Categorie.update');
Route::get('/Categorie/delete/{id}',[CategorieController::class,'destroy'] )->name('Categorie.delete');

Route::get('/Produit', [ProduitController::class,'index']);
Route::post('/Produit/store', [ProduitController::class,'store'])->name('Produit.store');
Route::get('/Produit/edit/{id}', [ProduitController::class,'edit'])->name('Produit.edit');
Route::get('/Produit/update/{id}', [ProduitController::class,'update'])->name('Produit.update');
Route::get('/Produit/delete/{id}',[ProduitController::class,'destroy'] )->name('Produit.delete');








/*
composer create-project laravel/laravel testTravaille
php artisan make:controller CategorieController --resource
php artisan make:model Produit --migration
php artisan migrate
*/