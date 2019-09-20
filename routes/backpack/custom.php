<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // CRUD::resource('book', 'BookCrudController');
    // CRUD::resource('pricetype', 'PricetypeCrudController');
    // CRUD::resource('price', 'PriceCrudController');
    // CRUD::resource('ntre', 'NtreCrudController');
    CRUD::resource('cat', 'CatCrudController');
    CRUD::resource('carts', 'CartsCrudController');
    CRUD::resource('line_items', 'CartsCrudController');
    CRUD::resource('orders', 'OrdersCrudController');
    // CRUD::resource('cat', 'CatCrudController');
    // CRUD::resource('cats', 'CatCrudController');
    CRUD::resource('product', 'ProductCrudController');
}); // this should be the absolute last line of this file