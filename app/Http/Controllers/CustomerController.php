<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
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

        $all_customer = Customer::latest() -> get();
        return view('admin.customer.index', compact('all_customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.add');
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
            'name' => 'required|max:255',
            'email' => 'required|unique:customers|max:255',
            'phone' => 'required|unique:customers|max:15',
            'address' => 'required',
            'shope_name' => 'required',
            'account_holder' => 'required',

            'account_number' => 'required|max:30',
            'bank_name' => 'required',
            'bank_branch' => 'required',

            'photo' => 'required',

        ]);

        if( $request -> hasFile('photo')){

            $picture = $request -> file('photo');
            $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
            $picture -> move(public_path('media/customers_photo'), $picture_name );

           }

        Customer::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'photo' => $picture_name,
            'shope_name' => $request -> shope_name,
            'account_holder' => $request -> account_holder,
            'account_number' => $request -> account_number,
            'bank_name' => $request -> bank_name,
            'bank_branch' => $request -> bank_branch,

           'city' => $request -> city,
        ]);

        return redirect() -> back() -> with('success', 'Customer added successfull');
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
