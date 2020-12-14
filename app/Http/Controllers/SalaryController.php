<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $all_salary = Salary::latest() -> get();
        return view('admin.salary.index', compact('all_salary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_employee = Employee::all();
        return view('admin.salary.add', compact('all_employee'));
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
            'month' => 'required',
            'advance_salary' => 'required',
            'year' => 'required',



        ]);

            $month = $request -> month;
            $emp_id = $request -> emp_id;

            $advance_salary = Salary:: where('month', $month) -> where('emp_id', $emp_id) -> first();

            if($advance_salary === NULL){
                Salary::create([
                    'emp_id' => $request -> emp_id,
                    'month' => $request -> month,
                    'advance_salary' => $request -> advance_salary,
                    'year' => $request -> year,

                ]);

                return redirect() -> back() -> with('success', 'Advance Salary added successfull');
            }else{
                return redirect() -> back() -> with('fail', 'Advance Salary All ready Paid in this month');
            }





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
