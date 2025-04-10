<?php

use App\Models\menu;

Route::get('/menu', function () {
    $data = menu::all();
    return view('menu.index', compact('data'));
});
