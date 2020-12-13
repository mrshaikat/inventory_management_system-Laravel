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

                                        <th>Shope Name</th>
                                        <th>City</th>

                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_supplier as $supplier)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $supplier -> name }}</td>
                                        <td>{{ $supplier -> phone }}</td>
                                        <td>{{ $supplier -> address }}</td>
                                        <td>
                                            @if( !empty($supplier -> photo) )
                                            <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/suppliers_photo/{{ $supplier -> photo }}" alt="">
                                            @endif


                                        </td>

                                        <td>{{ $supplier -> shope_name }}</td>
                                        <td>{{ $supplier -> city }}</td>

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
