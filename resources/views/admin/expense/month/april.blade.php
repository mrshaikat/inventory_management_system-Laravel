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
                                $month = "April";

                            @endphp
                          @if( !empty( $month))
                          <p class="text-center text-danger">  <strong>{{ $month  }} Expense</strong> </p>
                          @endif
                            Monthly Expense
                            <div class="mt-2">
                                <a class="btn btn-info btn-sm mb-1" href="{{ route('january.expense') }}">January</a>
                                <a class="btn btn-danger btn-sm mb-1" href="{{ route('february.expense') }}">February</a>
                                <a class="btn btn-success btn-sm mb-1" href="{{ route('march.expense') }}">March</a>
                                <a class="btn btn-primary btn-sm mb-1" href="{{ route('april.expense') }}">April</a>
                                <a class="btn btn-warning btn-sm mb-1" href="{{ route('march.expense') }}">May</a>
                                <a class="btn btn-info btn-sm mb-1" href="{{ route('june.expense') }}">June</a>
                                <a class="btn btn-danger btn-sm mb-1" href="{{ route('july.expense') }}">July</a>
                                <a class="btn btn-success btn-sm mb-1" href="{{ route('august.expense') }}">August</a>
                                <a class="btn btn-primary btn-sm mb-1" href="{{ route('september.expense') }}">September</a>
                                <a class="btn btn-danger btn-sm mb-1" href="{{ route('october.expense') }}">October</a>
                                <a class="btn btn-warning btn-sm mb-1" href="{{ route('noverber.expense') }}">Novermber</a>
                                <a class="btn btn-info btn-sm mb-1" href="{{ route('december.expense') }}">December</a>
                                </div>
                            <a class="btn btn-success btn-sm pull-right" href="{{ route('expense.create') }}">Add Expense</a></h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped table-bordered mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Expense Deatails</th>


                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($monthly as $data)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $data -> details }}</td>
                                        <td>{{ $data -> date }}</td>
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
                        @php
                        $month = "April";
                        $expense = DB::table('expenses') -> where('month', $month) -> sum('amount');
                    @endphp
                  @if( !empty( $expense))
                  <p class="text-center text-danger" style="font-size: 24px;"><strong>Total : </strong> {{ $expense  }} <strong> Taka</strong></</p>
                  @endif
                    </div>
                </div>




			</div>
		</div>

@endsection
