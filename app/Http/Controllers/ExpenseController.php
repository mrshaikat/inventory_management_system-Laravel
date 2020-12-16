<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expense.add');
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
            'details' => 'required',
            'amount' => 'required',


        ]);



        Expense::create([
            'details' => $request -> details,
            'amount' => $request -> amount,
            'year' => $request -> year,
            'month' => $request -> month,
            'date' => $request -> date,

        ]);

        return redirect() -> back() -> with('success', 'Expense added successfull');
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

    public function TodayExpense(){
        $date = date("d-m-y");

        $today = Expense::where('date', $date ) -> latest() -> get();

        return view('admin.expense.today', compact('today'));
    }


    public function MonthlyExpense(){
        $month = date("F");

        $monthly = Expense::where('month', $month ) -> latest() -> get();

        return view('admin.expense.monthly', compact('monthly'));
    }


    public function YearlyExpense(){
        $year = date("Y");

        $yearly = Expense::where('year', $year ) -> latest() -> get();

        return view('admin.expense.yearly', compact('yearly'));
    }

    public function JanuaryExpense(){
        $month = "January";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.january', compact('monthly'));
    }


}
