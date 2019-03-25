<?php

Route::get('/', function(){
	return view('welcome');
});
Route::get('/notes', function(){
	return view('inicio');
});
Route::get('/about', function(){
	return view('about');
});
Route::get("/contacto","ContactController@showForm");
Route::post("/contacto","ContactController@store")-> name ("contacto.store");

Route::resource('/user', 'UsersController');

Route::get("/login", function(){
	return "Formulario para iniciar sesion";
})->name("auth.login");

