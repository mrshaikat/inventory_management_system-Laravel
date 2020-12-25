<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

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
}
