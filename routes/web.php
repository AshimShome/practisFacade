<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\myFaced;

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

Route::get('/', function () {

    $age=app()->make('key1');
    $age->set_age(2000);
    $myage=$age->get_age();
    echo $myage;
     myFaced::set_age(1997);
    // echo myFaced::get_age();
    die();

    // return view('welcome');
});
