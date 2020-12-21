<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        $all_supplier = Supplier::latest() -> get();
        return view('admin.supplier.index', compact('all_supplier') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.add');


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
            'email' => 'required|unique:suppliers|max:255',
            'phone' => 'required|unique:suppliers|max:15',
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
            $picture -> move(public_path('media/suppliers_photo'), $picture_name );

           }

       Supplier::create([
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
            'type' => $request -> type,
           'city' => $request -> city,
        ]);

        return redirect() -> back() -> with('success', 'Supplier added successfull');
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
