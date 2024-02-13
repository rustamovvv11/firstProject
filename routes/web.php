<?php

use App\Models\animals;
use App\Models\Car;
use App\Models\Client;
use App\Models\foods;
use App\Models\laptoops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/test', function () {
    return view('test', ['cars' => Car::all()]);
});


Route::post('/animals', function (Request $req) {
    animals::create([
        'name' =>   $req->name,
        'color' => $req->color,
        'type' => $req->type,

    ]);
    return back()->with('success', 'Car created successfully');
});







Route::get('/animals', function () {
    return view('animals');
});


Route::get('/animals', function () {
    return view('animals', ['animals' => animals::all()]);
});



Route::get('/foods', function () {
    return view('foods');
});

Route::get('/foods', function () {
    return view('foods', ['foods' => foods::all()]);
});


Route::post('/save_food', function (Request $req) {
    foods::create([
        'name' =>   $req->name,
        'ccal' => $req->ccal,
        'type' => $req->type,

    ]);
    return back();
});



Route::get('/laptoops', function () {
    return view('laptoops', ['pc' => laptoops::all()]);
});



Route::post('/save_laptoops', function (Request $req) {
    laptoops::create([
        'name' =>   $req->name,
        'manufacturer' => $req->manufacturer,
        'os' => $req->os,

    ]);
    return back();
});


Route::get('/animals/{id}', function ($id) {
    animals::where('id', '=', $id)->first()->delete();

    return back();
});


Route::get('/save_food/{id}', function ($id) {
    foods::where('id', '=', $id)->first()->delete();

    return back();
});


Route::get('/save_laptoops/{id}', function ($id) {
    laptoops::where('id', '=', $id)->first()->delete();

    return back();
});


