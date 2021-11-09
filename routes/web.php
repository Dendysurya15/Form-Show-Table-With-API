<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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


Route::get('/', function (Request $request) {
    if ($request->has('data_sampels_id')) {
        $data = Http::get('https://slab.srs-ssms.com/api/admin/gethasilanalisas/' . $request->input('data_sampels_id'))->json();

        if ($data['success'] == 0) {
            return view('home')->withErrors(['msg' => Str::headline(strtolower($data['message']))]);
        }
        return view('home', compact('data'));
    }
    return view('home');
});
