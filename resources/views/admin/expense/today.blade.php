@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title mb-0">
                            @php
                                $date = date("d-m-y");
                                $expense = DB::table('expenses') -> where('date', $date) -> sum('amount');
                            @endphp
                          @if( !empty( $expense))
                          <p class="text-center text-danger" class="text-danger"><strong>Total : </strong> {{ $expense }} <strong>Taka</strong> </p>
                          @endif
                            Today Expense
                            <a class="btn btn-primary btn-sm pull-right" href="{{ route('expense.create') }}">Add Expense</a></h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped table-bordered mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Expense Deatails</th>


                                        <th>Amount</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($today as $data)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $data -> details }}</td>

                                        <td>{{ $data -> amount }}</td>


                                        <td>

                                            {{-- <a class=" btn btn-primary btn-sm" href="">View</a> --}}

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
