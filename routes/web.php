<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Avaialable jobs</h1>';
})->name('jobs');

Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function (Request $request) {
    // return $request->query('name');
    // return $request->only(['name', 'age']);
    // return $request->all();
    // return $request->has('name');
    // return $request->input('name', 'Default Name');
    return $request->except(['name']);
});
