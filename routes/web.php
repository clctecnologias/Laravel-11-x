<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/site/routes.php';



Route::get('/', function () {
    return view('welcome');
});
