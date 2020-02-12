<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola', function () {
    return view('.../olamundo');
});
