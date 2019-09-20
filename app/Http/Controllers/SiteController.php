<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SiteController extends Controller
{
    //
    public function index()
    {
    	$this->data['lang'] = config('app.locale');
		$this->data['books'] = Book::all();
		return view("site", $this->data);

    }
}
