<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
        $this->data['products'] = Product::all();
        $this->data['cats'] = Cat::all();
        // $node->ancestors;
        return view("products", $this->data);   
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

    public function set_main_image($product, $img_id)
    {
        $p = Product::find($product);
        // $p->image = $img_id;
        $p->image = json_decode($p->remote_images,TRUE)[$img_id];
        // $p->remote_images;
        $p->save();


        return redirect()->action(
            'ProductController@remote_images', ['id' => $product]
        );

        // return redirect()->action('HomeController@index');

        // return redirect()->route('cats');
        // return redirect('/product/'+ $product +'/remote_images');
        // '/product/{id}/remote_images'

    }


    public function to_cart($id, $qty=1)
    {

    // current_item = self.line_items.find_by(product_id: product_id)
    // if current_item
    //   current_item.quantity += 1
    // else
    //   # else add a brand new, separate, line item
    //   product_price = Product.find_by(id: product_id).price
    //   current_item = line_items.build(product_id: product_id, price: product_price)
    // end
    // current_item 

        # code...
        // Route::get('/product/{id}/to_cart', 'ProductController@to_cart');
        $p = Product::find($id);
        return $p->name;
        // line_items
        // echo $p->name;
        // echo $qty;
    }

    public function remove_image($id, $img_id)
    {
        $p = Product::find($id);
        // $p->image = $img_id;
        // $rm_image = json_decode($p->remote_images,TRUE)[$img_id];
        $rm_image_a = json_decode($p->remote_images,TRUE);
        unset($rm_image_a[$img_id]);
        // $p->image = json_decode($p->remote_images,TRUE)[$img_id];
        $p->remote_images = json_encode($rm_image_a);
        // $p->remote_images;
        $p->save();

        // return true;
        // return redirect()->action(
        //     'ProductController@remove_image', ['id' => $product]
        // );

        // return redirect()->action('HomeController@index');

        // return redirect()->route('cats');
        // return redirect('/product/'+ $product +'/remote_images');
        // '/product/{id}/remote_images'

    }

// remove_image

    public function remote_images($id)
    {
        $this->data['id'] = $id;
        $p=DB::table('products')->where('ident', $id)->first();
        $this->data['name'] = $p->name;

        // $this->data['remote_images1'] = json_encode( $p->remote_images );
        $this->data['remote_images'] = $p->remote_images;
        $this->data['p'] = $p;
        // $remote_images

        return view("remote_images", $this->data);
        // return Response::json($this->data, 200, array(), JSON_PRETTY_PRINT);
        // $this->data['product'] = DB::table('products')->where('ident', $id)->first();
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $p1 = Product::find($product);
        // $this->data['products'] = Product::find($product);
        // $this->data['products'] = Product::all();
        // return Response::json($this->data, 200, array(), JSON_PRETTY_PRINT);

        $this->data['product'] = DB::table('products')->where('ident', $id)->first();
        return Response::json($this->data, 200, array(), JSON_PRETTY_PRINT);

        // $p1->remote_images

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
