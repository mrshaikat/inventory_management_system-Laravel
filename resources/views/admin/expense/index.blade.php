@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Products <a class="btn btn-primary btn-sm pull-right" href="{{ route('product.create') }}">Add Product</a></h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Selling Price</th>
                                        <th>Image</th>

                                        <th>Garage</th>
                                        <th>Route</th>

                                        <th>Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_product as $product)
                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>



                                        <td>{{ $product -> product_name }}</td>
                                        <td>{{ $product -> product_code }}</td>
                                        <td>{{ $product -> selling_price }}</td>
                                        <td>
                                            @if( !empty($product -> product_image) )
                                            <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/product_photos/{{ $product -> product_image }}" alt="">
                                            @endif


                                        </td>

                                        <td>{{ $product -> product_garage }}</td>
                                        <td>{{ $product -> product_route }}</td>

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
