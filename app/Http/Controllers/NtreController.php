<?php

namespace App\Http\Controllers;

use App\Ntre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
// use App\Models\Ntre;

class NtreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $ntres = Ntre::all();

        // return "index Ntree";
        $this->data['ntres'] = Ntre::all();
        // $node->ancestors;
        return view("ntres", $this->data);        
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
     * @param  \App\Ntre  $Ntre
     * @return \Illuminate\Http\Response
     */
    // public function show(Ntre $Ntre)
    public function show($id)
    {
        $this->data['ntre'] = Ntre::find($id);
        return Response::json($this->data, 200, array(), JSON_PRETTY_PRINT);
        // return view("ntre", $this->data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ntre  $Ntre
     * @return \Illuminate\Http\Response
     */
    public function edit(Ntre $Ntre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ntre  $Ntre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ntre $Ntre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ntre  $Ntre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ntre $Ntre)
    {
        //
    }
}
