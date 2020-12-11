<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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

    public function showEmployee(){


        $all_employees = Employee::latest() -> get();

        return view('admin.employee.all_employee', compact('all_employees'));
    }

    public function create(){


        return view('admin.employee.add_employee');
    }

    public function store(Request $request){
        $this-> validate($request , [
            'name' => 'required|max:255',
            'email' => 'required|unique:employees|max:255',
            'nid_no' => 'required|unique:employees|max:255',
            'address' => 'required',
            'phone' => 'required|max:13',
            'photo' => 'required',
            'salary' => 'required',
        ]);

        if( $request -> hasFile('photo')){

            $picture = $request -> file('photo');
            $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
            $picture -> move(public_path('media/employee_photos'), $picture_name );

           }

        Employee::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'nid_no' => $request -> nid_no,
            'exprience' => $request -> exprience,
            'photo' => $picture_name,
            'salary' => $request -> salary,
            'vacation' => $request -> vacation,
           'city' => $request -> city,
        ]);

        return redirect() -> back() -> with('success', 'Employee added successfull');
    }


    public function destroy($id){

        $data = Employee::find($id);
        $data -> delete();

        return redirect() -> route('show.employee') -> with('success', 'Employee Delete Successfull');
    }

    public function viewSingle($id){
        $all_data = Employee::find($id);

        return view('admin.employee.single_view', compact('all_data'));

    }

    public function edit($id){

        $all_data = Employee::find($id);
        return view('admin.employee.edit_employee', compact('all_data'));

    }

    public function update(Request $request, $id){

        $update = Employee::find($id);

        if( $request -> hasFile('new_picture') ){

            $picture = $request -> file('new_picture');
            $picture_name = md5(time().rand()).'.'. $picture -> getClientOriginalExtension();
            $picture -> move(public_path('media/employee_photos'), $picture_name );

            unlink('media/employee_photos'. '/'.$request -> old_picture );

        }else{

            $picture_name = $request -> old_picture ;
        }

        $update -> name = $request -> name;
        $update -> email = $request -> email;
        $update -> phone = $request -> phone;
        $update -> address = $request -> address;
        $update -> nid_no = $request -> nid_no;
        $update -> exprience = $request -> exprience;
        $update -> photo = $picture_name;
        $update -> salary = $request -> salary;
        $update -> vacation = $request -> vacation;
        $update -> city = $request -> city;

        $update -> update();

        return redirect() -> route('show.employee') -> with('success', 'Employee Update Successfull');


    }


}
