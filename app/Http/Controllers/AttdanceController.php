<?php

namespace App\Http\Controllers;

use App\Models\Attdance;
use App\Models\Employee;
use Illuminate\Http\Request;


class AttdanceController extends Controller
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

        $all_att = Attdance::select('edit_date') -> groupBy('edit_date') -> get();
        return view('admin.attendence.index', compact('all_att'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_employees = Employee::all();
        return view('admin.attendence.attdence', compact('all_employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date = $request -> att_date;
        $attendence = Attdance::where('att_date', $date) -> first();

        if($attendence){
            return redirect() -> back() -> with('fail', 'Attendence Already Taken');
        }else{
            foreach( $request -> user_id as $id){

                $data =array(
                 "user_id" => $id,
                 "att_date"   => $request -> att_date,
                 "att_month"   => $request -> att_month,
                 "att_year"   => $request -> att_year,
                 "attendence" => $request -> attendence[$id],
                 "edit_date" =>  date("d_m_y"),


                );
                Attdance::insert($data);
     }
     return redirect() -> back() -> with('success', 'Attendence taken successfull');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($edit_date)
    {
        $all_data = Attdance::where('edit_date', $edit_date ) -> get();




        return view('admin.attendence.show', compact('all_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($edit_date)
    {

        $all_data = Attdance::where('edit_date', $edit_date ) -> get();
        $date = Attdance::where('edit_date', $edit_date ) -> first();



        return view('admin.attendence.edit', compact('all_data', 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $edit_date)
    {

        foreach( $request -> id as $id){

            $data =array(

             "att_date"   => $request -> att_date,
             "att_month"   => $request -> att_month,
             "att_year"   => $request -> att_year,
             "attendence" => $request -> attendence[$id],



            );



             $update_attend = Attdance::where(['att_date' => $request -> att_date, 'id' => $id]) -> first();

             $update_attend -> update($data);

             return redirect() -> route('attendence.index') -> with('success', 'Attendence Update successfull');

 }



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
