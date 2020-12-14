@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title bg-primary">All Advance Salary</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Salary</th>
                                        <th>Advance</th>
                                        <th>Month</th>



                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_salary as $salary)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $salary -> employies -> name }}</td>


                                         <td>
                                            @if( !empty($salary -> employies -> photo) )
                                            <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/employee_photos/{{ $salary -> employies -> photo }}" alt="">
                                            @endif


                                        </td>
                                        <td>{{ $salary ->  advance_salary  }}</td>
                                        <td>{{ $salary -> employies -> salary }}</td>
                                        <td>{{ $salary -> month }}</td>



                                        <td>

                                            <a class=" btn btn-primary btn-sm" href="">View</a>

                                            <a class=" btn btn-warning btn-sm" href="">Edit</a>

                                            <form style="display: inline;" action="" method="POST">

                                                <button id="delete" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>


                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




			</div>
		</div>

@endsection
