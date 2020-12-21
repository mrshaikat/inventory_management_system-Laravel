@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Take Attendence<a class="btn btn-primary btn-sm pull-right" href="{{ route('attendence.index') }}">ALL Attedence</a>


                        </h4>

                        <h4><span class=" text-info">{{ date("D M Y") }}</span> (<span class=" text-danger">{{date("d-m-y")}}</span>)</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Photo</th>




                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form action="{{ route('attendence.store') }}" method="POST">
                                        @csrf
                                        @foreach($all_employees as $employee)
                                        <tr>
                                            <td>{{ $loop -> index+1 }}</td>



                                            <td>{{ $employee -> name }}</td>

                                            <td>
                                                @if( !empty($employee -> photo) )
                                                <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/employee_photos/{{ $employee -> photo }}" alt="">
                                                @endif



                                            </td>

                                            <input type="hidden" name="user_id[]" value="{{ $employee -> id }}">

                                             <td>

                                                <input class=" mr-1" type="radio" name="attendence[{{ $employee -> id }}]" value="Present"><label class=" mr-3" for="">Present</label>
                                                <input class=" mr-1" type="radio" name="attendence[{{ $employee -> id }}]" value="Absent"><label for="">Absent</label>
                                            </td>

                                            <input type="hidden" name="att_date" value="{{ date("d-m-y") }}">
                                            <input type="hidden" name="att_month" value="{{ date("F") }}">
                                            <input type="hidden" name="att_year" value="{{ date("Y") }}">
                                        </tr>
                                        @endforeach





                                </tbody>

                            </table>
                            <button type="submit" class="btn btn-success mt-3">Take Attendence</button>
                        </form>
                        </div>
                    </div>
                </div>




			</div>
		</div>

@endsection
