<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_product = Product::latest() -> get();
        return view('admin.product.index', compact('all_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = Category::latest() -> get();
        $all_supplier = Supplier::latest() -> get();
        return view('admin.product.add', compact('all_category', 'all_supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request , [
            'product_name' => 'required',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'product_code' => 'required|unique:products|max:255',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',

        ]);

        if( $request -> hasFile('photo')){

            $picture = $request -> file('photo');
            $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
            $picture -> move(public_path('media/product_photos'), $picture_name );

           }

        Product::create([
            'product_name' => $request -> product_name,
            'cat_id' => $request -> cat_id,
            'sup_id' => $request -> sup_id,
            'product_code' => $request -> product_code,
            'product_garage' => $request -> product_garage,
            'product_route' => $request -> product_route,
            'product_image' => $picture_name ,
            'buy_date' => $request -> buy_date,
            'expire_date' => $request -> expire_date,
            'buying_price' => $request -> buying_price,
           'selling_price' => $request -> selling_price,
        ]);

        return redirect() -> back() -> with('success', 'Product added successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
