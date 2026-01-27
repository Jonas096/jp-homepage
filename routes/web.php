<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\In;

Route::get('/', function () {
    return Inertia\Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
