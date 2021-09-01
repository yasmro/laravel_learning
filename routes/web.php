<?php

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
    return view('welcome');
});

//書く順番が重要．
Route::post('/join/', function () {
    return 'Join';
});

Route::get('/join/', function () {
    // いたずらに読んだ場合，リダイレクトする
    return redirect()->to('/');
});

Route::get('/archives/', function () {
    return view('archives.index');
});

//パラメータ利用
Route::get('/archives/{category}', function ($category) {
    // concat string
    // return 'Archives View - '.$category;

    // 引数を渡すときは第2引数に指定（reactでいうprops）
    return view('archives.category', ['category'=>$category]);
});

Route::get('/archives/{category}/{id}', function ($category, $id) {
    // concat string
    return 'Archives View - '.$category.' - ID: '.$id;
});

//MathControllerクラスのsumアクション（関数）を起動（パラメータはそのままわたしてくれる）
Route::get('/sum/{x}/{y}', 'MathController@sum');

Route::get('/entries/', 'EntriesController@index');