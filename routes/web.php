<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetallesPedidosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register',[AuthController::class,'showRegister'] )->name('register');
Route::post('/register', [AuthController::class,'register'] );


Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::post('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');


Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/{id}',[ProductController::class,'find'])->middleware('auth')->name('product.find');
Route::post('/product',[ProductController::class,'create'])->middleware('auth')->name('product.create');
Route::get('/product/{id}/edit',[ProductController::class,'edit'])->middleware('auth')->name('product.edit');
Route::post('/update/{id}',[ProductController::class,'update'])->middleware('auth')->name('product.update');
Route::post('/product/destroy',[ProductController::class,'destroy'])->middleware('auth')->name('product.destroy');


Route::resource('pedidos', App\Http\Controllers\PedidosController::class)->middleware('auth');

Route::resource('detalles_pedidos', DetallesPedidosController::class)->middleware('auth');

Route::post('/correo',function ()  {
    Mail::to('eberandalf@gmail.com')->send(new \App\Mail\PedidosEmail());
    return 'Correo enviado';
})->name('enviar.correo');