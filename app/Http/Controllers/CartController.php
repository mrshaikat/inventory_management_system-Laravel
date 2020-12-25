<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request){

        $data =array(

            "id"   => $request -> id,
            "name"   => $request -> name,
            "qty"   => $request -> qty,
            "price" => $request -> price,
            "weight" => $request -> weight,



           );

           Cart::add($data);
           return redirect() -> route('pos') -> with('success', 'Product add to Cart');

    }

    public function update(Request $request, $rowId){

        $data =array(

            "qty"   => $request -> qty,

           );
           Cart::update($rowId,$data);
           return redirect() -> route('pos') -> with('success', 'Quantity update Successfull');
    }

    public function destroy($rowId){

            Cart::remove($rowId);
            return redirect() -> route('pos') -> with('fail', 'Cart remove Successfull');
    }

    public function CreateInvoice(Request $request){

        $this-> validate($request, [
            'cus_id'=> 'required',
        ],[
            'cus_id.required' => 'Select a Customer First !'
        ]);

        $cus_id = $request -> cus_id;
        $all_customer = Customer::where('id', $cus_id) -> first();
        $setting = Setting::all() -> first();
        $cart_content = Cart::content();

        return view('admin.pos.invoice', compact('all_customer', 'cart_content', 'setting'));
    }


    public function finalInvoice(Request $request){

        $data =array(

            "customer_id"   => $request -> customer_id,
            "order_date"   => $request -> order_date,
            "order_status"   => $request -> order_status,
            "total_products" => $request -> total_products,
            "sub_total" => $request -> sub_total,
            "vat" => $request -> vat,
            "total" => $request -> total,
            "payment_status" => $request -> payment_status,
            "pay" => $request -> pay,
            "due" => $request -> due,



           );

           $order_id = DB::table('orders') -> insertGetId($data);
           $contents = Cart::content();

          foreach ($contents as $content) {
            $odata =array(

                "order_id"   => $order_id,
                "product_id"   => $content -> id,
                "quantity"   => $content -> qty,
                "unitcost"   => $content -> price,
                "total"   => $content -> total,



               );

               DB::table('orderdetails') -> insert($odata);
          }

            Cart::destroy();
           return redirect() -> route('pos') -> with('success', 'Successfully Invoice Created | Please Delever the product and accept status');

    }
}
