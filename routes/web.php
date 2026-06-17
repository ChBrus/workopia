<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Avaialable jobs</h1>';
})->name('jobs');

Route::post('/submit', function () {
    return 'Submitted';
});

Route::any('/submit', function () {
    return 'Match submitted';
});

Route::get('/test', function () {
    $url = route('jobs');
    return "<a href='$url'>Jobs</a>";
});

Route::get('/api/users', function () {
    return [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ];
});
