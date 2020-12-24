<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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


    public function Setting(){



        $setting = Setting::first();
        return view('admin.setting.add', compact('setting'));
    }



public function Update(Request $request, $id){

    $update = Setting::find($id);
    $this-> validate($request , [
        'company_name' => 'required',
        'company_address' => 'required',
        'company_email' => 'required',
        'company_phone' => 'required',

        'company_city' => 'required',
        'company_country' => 'required',
        'company_zipcode' => 'required',
    ]);

    if( $request -> hasFile('company_logo') ){

        $picture = $request -> file('company_logo');
        $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
        $picture -> move(public_path('media/company_photos'), $picture_name );

        unlink('media/company_photos'. '/'.$request -> old_picture );

    }else{

        $picture_name = $request -> old_picture ;
    }



       $update -> company_name = $request -> company_name;
       $update -> company_address = $request -> company_address;
       $update -> company_email = $request -> company_email;
       $update -> company_phone = $request -> company_phone;
       $update -> company_logo = $picture_name;
       $update -> company_city = $request -> company_city;
       $update -> company_country = $request -> company_country;
       $update -> company_zipcode = $request -> company_zipcode;

       $update -> update();

       return redirect() -> back() -> with('success', 'Setting Update Successfull');




}





}
