<?php

use App\Http\UserTableView;
use Illuminate\Support\Facades\Route;

$table = new UserTableView;

Route::get('/users/eloquent', fn () => $table(resource: false, paginateMethod: 'paginate'));
Route::get('/users/resource', fn () => $table(resource: true, paginateMethod: 'paginate'));
Route::get('/users/eloquent/simple', fn () => $table(resource: false, paginateMethod: 'simplePaginate'));
Route::get('/users/resource/simple', fn () => $table(resource: true, paginateMethod: 'simplePaginate'));
Route::get('/users/eloquent/cursor', fn () => $table(resource: false, paginateMethod: 'cursorPaginate'));
Route::get('/users/resource/cursor', fn () => $table(resource: true, paginateMethod: 'cursorPaginate'));