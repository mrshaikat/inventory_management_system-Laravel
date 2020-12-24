<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class PosController extends Controller
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

    public function index(){

        $all_product =Product::latest() -> get();
        $all_customer = Customer::latest() -> get();
        $all_category = Category::latest() -> get();
        return view('admin.pos.pos', compact('all_product', 'all_customer','all_category'));

    }
}
