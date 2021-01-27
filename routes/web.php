<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () 
{
    $name = 'Santiago Velez Suarez';
    $id = '1053789020';    
    return view('welcome')->with('name', $name)->with('id', $id);
});

Route::get('/name1', function () 
{
    $name = 'Santiago Velez S';
    $id = '1053789020';
    return view('welcome')->with(['name' => $name, 'id' => $id]);    
});

Route::view('/name2', 'welcome', ['name' => 'SANTIAGO VELEZ S', 'id' => '1053789020']);

$lista=[
    ['name' => 'Angular', 'url' => 'https://angular.io/'],
    ['name' => 'Django', 'url' => 'https://www.djangoproject.com/'],
    ['name' => 'Laravel', 'url' => 'https://laravel.com/docs/8.x'],
    ['name' => 'NodeJS', 'url' => 'https://nodejs.org/es/'],
    ['name' => 'React', 'url' => 'https://es.reactjs.org/'],
    ['name' => 'Vue.js', 'url' => 'https://vuejs.org/']
];

Route::view('/frameworks', 'lista_frameworks', compact('lista'));