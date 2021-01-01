<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function PendingOrder(){

        $pending = DB::table('orders')
        -> join('customers', 'orders.customer_id', 'customers.id')
        ->select('customers.name', 'orders.*') -> where('order_status', 'pending') -> get();

        return view('admin.orders.pending', compact('pending'));

    }

    public function ViewOrder($id){
        $order = DB::table('orders')
        -> join('customers', 'orders.customer_id', 'customers.id')

        -> where('orders.id', $id)
        -> first();

        $order_details = DB::table('orderdetails')
        -> join('products', 'orderdetails.product_id', 'products.id')
        ->select('orderdetails.*', 'products.product_name', 'products.product_code')
        -> where('order_id', $id)
        -> get();

        $odr_id = DB::table('orders') -> first();

        return view('admin.orders.confirmation', compact('order','order_details', 'odr_id'));


    }

    public function PosDone($id){

        DB::table('orders') -> where('id', $id) -> update(['order_status' => 'success']);

        return redirect() -> route('pending.order') -> with('success' , 'Order Confirm successfull');
    }

    public function SuccessOrder(){
        $success = DB::table('orders')
        -> join('customers', 'orders.customer_id', 'customers.id')
        ->select('customers.name', 'orders.*') -> where('order_status', 'success') -> get();

        return view('admin.orders.success', compact('success'));

    }
}
