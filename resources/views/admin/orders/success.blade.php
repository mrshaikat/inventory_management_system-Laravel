@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Success Orders

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Total Amount</th>

                                        <th>Payment</th>
                                        <th>Order Status</th>

                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($success as $row)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $row -> name }}</td>
                                        <td>{{ $row -> order_date }}</td>
                                        <td>{{ $row -> total_products }}</td>
                                        <td>{{ $row -> total }}</td>
                                        <td>{{ $row -> payment_status }}</td>
                                        <td><span class="badge badge-success">{{ $row -> order_status }}</span></td>

                                        <td>

                                            <a class=" btn btn-success" href="{{ route('view.order', $row -> id) }}">View</a>


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
