<?php

namespace App\Http\Controllers;

use App\Models\LineItem;
use Illuminate\Http\Request;

class LineItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function remove($id)
    {
        # code...
        // LineItem::
        LineItem::find($id)->delete(); 

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
     * @param  \App\LineItem  $LineItem
     * @return \Illuminate\Http\Response
     */
    public function show(LineItem $LineItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LineItem  $LineItem
     * @return \Illuminate\Http\Response
     */
    public function edit(LineItem $LineItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LineItem  $LineItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineItem $LineItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LineItem  $LineItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineItem $LineItem)
    {
        //
    }
}
