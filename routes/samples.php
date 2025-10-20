<?php

use App\Http\Controllers;

Route::get('/layout', function () {
    return view('layout-example');
})->name('layout');

Route::get('/learning-blade', function () {
    return view('learning-blade')
        ->with('name', 'Tiago')
        ->with('age', 23)
        ->with('details', '<b>Learning</b> <a href="https://www.laravel.com">Laravel</a> Framework')
        ->with('hobbies', ['Play games', 'Read books', 'Watch movies', 'Walking']);
})->name('learning-blade');

Route::view('/about', 'about');

Route::get('/product/{productId}', function (string $productId) {
    return view('product', [
        'productId' => $productId,
    ]);
})
    ->whereNumber('productId')
    ->name('product');

Route::get('/sum/{a}/{b}', function (float $a, float $b) {
    return "The sum of $a and $b is " . ($a + $b) . ".";
})->whereNumber(['a', 'b']);

Route::controller(Controllers\ExampleController::class)->group(function () {
    Route::get('/example', 'index')->name('example');
    Route::get('/example/create', 'create')->name('example.create');
});

Route::get('/invokable', Controllers\InvokableController::class)->name('invokable');

Route::resource('/resource', Controllers\ResourceController::class)
    ->except(['edit']);

Route::apiResource('/api', Controllers\ApiController::class)
    ->except('destroy');
