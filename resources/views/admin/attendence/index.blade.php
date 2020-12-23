@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Attendence<a class="btn btn-primary btn-sm pull-right" href="{{ route('attendence.create') }}">Take Attedence</a></h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Date</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_att as $row)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td>
                                            @php
                                                $date = str_replace('_','-',$row -> edit_date);
                                            @endphp
                                            {{ $date }}
                                        </td>

                                        <td>

                                        <a class=" btn btn-warning btn-sm" href="{{ route('attendence.show', $row -> edit_date) }}">View</a>


                                            <a class=" btn btn-warning btn-sm" href="{{ route('attendence.edit', $row -> edit_date) }}">Edit</a>

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
