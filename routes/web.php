<?php


use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/admin', [Controller\Admin::class, 'index'])->middleware('auth', 'admin');
Route::add('POST', '/admin/department/add', [Controller\Admin::class, 'addDepartment'])->middleware('auth', 'admin');
Route::add('POST', '/admin/room/add', [Controller\Admin::class, 'addRoom'])->middleware('auth', 'admin');
Route::add('POST', '/admin/phone/add', [Controller\Admin::class, 'addPhone'])->middleware('auth', 'admin');

Route::add('GET', '/admin/directory', [Controller\Admin::class, 'directory'])->middleware('auth', 'admin');

Route::add('GET', '/my-phones', [Controller\Site::class, 'myPhones'])->middleware('auth');