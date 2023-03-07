<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

//initial route for welcome.blade.php
Route::get('/', function () {
    return view('Items.welcome');
});

//made route for items through controller resource 
Route :: resource('items',ItemController::class);
//Did not specified any function in ItemController .default 'index' function will be accesed

