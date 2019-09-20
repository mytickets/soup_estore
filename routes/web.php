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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'CatController@index');


Route::get('/bar', function () {
    return view('site');
});


// Route::get('/xmlsync', function () {
//     // return view('welcome');
//     App\Jobs\Xmlsync::dispatch("My JOB welcome!");
// });

Route::get('/xmlsync', function () {
    Artisan::queue('import:image', [
        'user' => 1, '--queue' => 'default'
    ]);

    //
});

Route::get('/ntre', 'NtreController@index');
Route::get('/ntre/{id}', 'NtreController@show');


Route::get('/cats', 'CatController@index');
Route::get('/cats_left', 'CatController@cats_left');
Route::get('/cats_left/{id}', 'CatController@cats_left');

// Route::get('/cats_left', function () {
//     // cats_left
//     return view('cats_left');
// });



Route::get('/cat/{id}', 'CatController@show');

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/show_session', 'Controller@show_session');
// show

Route::get('/product/{id}/to_cart/{qty}', 'ProductController@to_cart');

Route::get('/product/{id}/remote_images', 'ProductController@remote_images');
Route::get('/product/{id}/remote_images/{img_id}/remove_image', 'ProductController@remove_image');

// http://localhost:8000/product/1000072/remote_images

// Route::get('/product/{id}/remote_images', 'ProductController@set_main_image');
Route::get('/product/{product}/set_main_image/{img_id}', 'ProductController@set_main_image');
// $product, $img_url

// 


Route::get('/site', 'SiteController@index')->name('site');
Route::get('/books', 'BookController@index')->name('books');
Route::get('/books/{id}', 'BookController@show');

Route::get('/import', function () {
    // return view('welcome');
echo "<pre>";
        Storage::disk('local')->put('Contents.txt', 'Contents');
        // Storage::put('avatars/1', $fileContents);
        $contents = Storage::get('Contents.txt');
        var_dump($contents);

        $priceTypes="PRICETYPES.xml";
        $importFile = File::get(storage_path('app/' . $priceTypes));
        echo asset('storage/PRICETYPES.xml');
        var_dump($importFile);
echo "</pre>";
});



// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });


// Route::get('/site', function () {
	// $this->data['lang'] = App::getLocale();
	// // $books = DB::table('books')->first();
	
	// $this->data['books'] = \App\Models\Book::all();
 //    // return var_dump($users->toArray()); // <---- or toJson()
	// // return view("site", ["lang"=>$lang], ["books"=>$books]);
	// return view("site", $this->data);
// });

