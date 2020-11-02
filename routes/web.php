<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\{
    showTweets,
    Testeinline
};


Route::get('/', function () {
    return view('welcome');
});
Route::get('tweets', ShowTweets::class);
