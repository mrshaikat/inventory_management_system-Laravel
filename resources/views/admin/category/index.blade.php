@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Categories</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Category Name</th>

                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_category as $category)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $category -> cat_name }}</td>





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
