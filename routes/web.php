<?php

use App\recipe;


Route::get('recipes', function () {
    $recipes = recipe::all();
    return view('recipes',compact('recipes'));
});

Route::get('/', function () {
    return view('home');
});

Route::get('about_us', function () {
    return view('about_us');
});
Route::get('ingredient', function () {
    return view('ingredient');
});
Route::get('vegetables', function () {
    return view('vegetables');
});
Route::get('cerealspulses', function () {
    return view('cerealspulses');
});
Route::get('spicesherbs', function () {
    return view('spicesherbs');
});
Route::get('fruits', function () {
    return view('fruits');
});
Route::get('seafood', function () {
    return view('seafood');
});
Route::get('admin', function () {
    return view('Admin/admin');
});
Route::get('dashboard', function () {
    return view('Admin/dashboard');
});
Route::get('meat', function () {
    return view('meat');
});
Route::get('dairy', function () {
    return view('dairy');
});
Route::get('sugar', function () {
    return view('sugar');
});


Route::post('adminlogin','admincontroller@adminlogin');
Route::get('logout','admincontroller@logout');
Route::get('/loginPage', function () {
    return view('Admin/admin');
});

Route::get('/adminPage', function () {
    if(Session::get('adminid'))
    {
        return view('Admin/admin');
    }
    else
    {
        return view('Admin/admin');
    }
});


Route::get('check', function () {
    if(Session::get('adminid'))
    {
        $res = recipe::all();
        return view('Admin/check',compact('res'));
    }
    else
    {
        return view('Admin/admin');
    }
    
});

Route::get('/addrecipes', function() {
    if(Session::get('adminid'))
    {
        return view('Admin/addrecipes');
    }
    else
    {
        return view('Admin/addrecipes');
    }
});
Route::post('/addEntry','recipecontroller@addEntry');

Route::get('/edit/{id}','recipecontroller@edit');
Route::post('editrecipe','recipecontroller@editrecipe');
Route::get('/delete/{id}','recipecontroller@delete');
Route::get('/recipeinfo/{id}','recipecontroller@view') ;
