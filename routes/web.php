<?php

Route::get('/', function () {
     return view('blog.index');
});
Route::get('post/{id}', function () {
    return view('blog.post');
});
Route::get('about', function () {
    return view('other.about');
});
Route::get('admin/create', function () {
    return view('admin.create');
});
Route::get('admin', function () {
    return view('admin.index');
});
Route::get('admin/edit/{id}', function () {
    return view('admin.edit');
});
Route::get('admin/update', function () {
    return view('admin.update');
});