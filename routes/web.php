<?php

use Illuminate\Support\Facades\Route;

Route::get('/website/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\LighthouseWebsiteController@id'
]);

Route::get('/websites', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\LighthouseWebsiteController@all'
]);
