@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Employees</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Image</th>

                                        <th>Salary</th>

                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_employees as $employee)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $employee -> name }}</td>
                                        <td>{{ $employee -> phone }}</td>
                                        <td>{{ $employee -> address }}</td>
                                        <td>
                                            @if( !empty($employee -> photo) )
                                            <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/employee_photos/{{ $employee -> photo }}" alt="">
                                            @endif


                                        </td>

                                        <td>{{ $employee -> salary }}</td>

                                        <td>

                                            <a class=" btn btn-primary btn-sm" href="{{ route('single.employee', $employee -> id) }}">View</a>

                                            <a class=" btn btn-warning btn-sm" href="{{ route('edit.employee', $employee -> id) }}">Edit</a>

                                            <form style="display: inline;" action="{{ route('destroy.employee', $employee -> id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
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
