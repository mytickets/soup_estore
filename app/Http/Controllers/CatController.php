<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd( Cat::all() );
        //
        $this->data['cats'] = Cat::all();
        // $node->ancestors;
        return view("cats", $this->data);        
    }

    public function cats_left($id=false)
    {
        // dd( Cat::all() );
        //
        // CatController
        if ($id) {
            # code...
            $this->data['cat'] = Cat::find($id);
        }
        $this->data['cats'] = Cat::all();
        // $node->ancestors;
        // return view("cats", $this->data);
        return view('cats_left', $this->data);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $this->data['cat'] = Cat::find($id);
        $this->data['cat'] = Cat::find($id);
        // $this->data['products'] = Product::whereIn('cat_id', $cat->id)->get();
        // $product = Products::where('cat_id',$id)->first();
        // $this->data['products'] = Product::all();
        $this->data['products'] = Product::where('cat_id',$id)->get();
        $this->data['childrens'] = Cat::where('parent_id',$id)->get();



        // return Response::json($this->data, 200, array(), JSON_PRETTY_PRINT);
        return view("cat", $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
