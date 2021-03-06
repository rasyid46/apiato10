<?php

use App\Containers\AppSection\Authentication\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('login', [Controller::class, 'showLoginPage'])
    ->name('login')
    ->middleware(['guest']);

Route::get('pdf', [Controller::class, 'showPdf'])
    ->name('showPdf')
    ->middleware(['guest']);
Route::get('/routes', function () {
    $routeCollection = Route::getRoutes();
    return view('appSection@authentication::routes', compact('routeCollection'));
});
    