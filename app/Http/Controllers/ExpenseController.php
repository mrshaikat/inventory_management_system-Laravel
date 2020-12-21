<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
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

    public function FebruaryExpense(){
        $month = "February";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.february', compact('monthly'));
    }

    public function MarchExpense(){
        $month = "March";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.march', compact('monthly'));
    }

    public function AprilExpense(){
        $month = "April";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.april', compact('monthly'));
    }


    public function MayExpense(){
        $month = "May";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.may', compact('monthly'));
    }



    public function JuneExpense(){
        $month = "June";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.june', compact('monthly'));
    }



    public function JulyExpense(){
        $month = "July";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.july', compact('monthly'));
    }



    public function AugustExpense(){
        $month = "August";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.august', compact('monthly'));
    }

    public function SeptemberExpense(){
        $month = "September";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.septemper', compact('monthly'));
    }

    public function OctoberExpense(){
        $month = "October";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.october', compact('monthly'));
    }

    public function NoverberExpense(){
        $month = "November";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.november', compact('monthly'));
    }

    public function DecemberExpense(){
        $month = "December";

        $monthly = Expense::where('month', $month ) -> get();

        return view('admin.expense.month.december', compact('monthly'));
    }



}
