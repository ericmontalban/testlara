<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return "Welcome";
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/crud', function() {
    return view('crud/index');
});

Route::get('/crud', function() {
    $age = 33;
    $data = ['name' => 'Andres', 'age' => $age];
    return view('crud/index', $data);
})->name('crud');

Route::get('/test', function() {
    return view('test');
});

Route::get('/contact', function() {
    return view('contact', ['name' => 'Andres']);
    // return redirect('/contact2', 303);
    // return redirect()->route('contact2');
    // return to_route('contac2')
})->name('contact');

Route::get('/contact2', function() {
    return view('contact2');
})->name('contact2');

Route::get('/crud/post', function() {
    return view('/crud/post');
})->name('contact2');

Route::get('/testPrimerControlador', [PrimerControlador::class, 'index']);
Route::get('/testSegundoControlador', [SegundoControlador::class, 'index']);
Route::get('/otro/{post}', [PrimerControlador::class, 'otro']);

Route::resource('post', PrimerControlador::class);