<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Avaialable jobs</h1>';
})->name('jobs');

Route::get('/test', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/test-json', function () {
    return response()->json([
        'name' => 'John Doe',
        'age' => 20,
    ])->cookie('name', 'John Doe');
});

Route::get('/read-cookie', function (Request $request) {
    $cookie_value = $request->cookie('name');

    return response()->json([
        'cookie_value' => $cookie_value,
    ]);
});

Route::get('/download', function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/notfound', function () {
    return new Response('Page Not Found', 404);
});
