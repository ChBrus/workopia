<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Avaialable jobs</h1>';
})->name('jobs');

Route::get('/posts/{id}', function (string $id) {
    return "Post ID: $id";
})->whereNumber('id');

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return "Post ID: $id, Comment ID: $commentId";
});
