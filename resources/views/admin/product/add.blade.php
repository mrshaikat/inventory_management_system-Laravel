@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">



				<div class="row">
					<div class="col-md-8 offset-2">
                        @include('validate')
                        <div class="card pl-3 pr-3">
                            <div class="card-header">
                                <h4 class="card-title">Add Product


                                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('product.index') }}">All Product</a>
                                    <a class="btn btn-success btn-sm pull-right mr-2" href="{{ route('import.product') }}">Import Product</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input name="product_name" type="text" class="form-control" placeholder="Product Name" >
                                    </div>

                                    <div class="form-group">
                                        <label>Product Code</label>
                                        <input name="product_code" type="text" class="form-control" placeholder="Product Name" >
                                    </div>
                                    <div class="form-group">
                                        <label>Category Name</label>
                                       <select name="cat_id" id="" class=" form-control">
                                           <option disabled="" selected=""></option>
                                          @foreach($all_category  as $category)
                                          <option value="{{ $category -> id }}">{{ $category -> cat_name }}</option>
                                          @endforeach

                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Supplier Name</label>
                                        <select name="sup_id" id="" class=" form-control">
                                            <option disabled="" selected=""></option>
                                           @foreach($all_supplier  as $supplier)
                                           <option value="{{ $supplier -> id }}">{{ $supplier -> name }}</option>
                                           @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Godaun</label>
                                        <input name="product_garage" type="text" class="form-control" placeholder="Godaun Number" >
                                    </div>

                                    <div class="form-group">
                                        <label>Product Route</label>
                                        <input name="product_route" type="text" class="form-control" placeholder="Product Route" >
                                    </div>
                                    <div class="form-group">
                                        <label>Buying Date</label>
                                        <input name="buy_date" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Expire Date</label>
                                        <input name="expire_date" type="date" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Buying Price</label>
                                        <input name="buying_price" type="text" class="form-control" placeholder="Buying Price">
                                    </div>

                                    <div class="form-group">
                                        <label>Selling Price</label>
                                        <input name="selling_price" type="text" class="form-control" placeholder="Selling Price">
                                    </div>



                                    <div class="form-group">

                                        <img class="" id="image" src="#"><label>Product Image</label> <br>

                                        <input type="file" class="" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

				</div>


			</div>
		</div>
        <!-- /Page Wrapper -->

        {{-- Image  --}}
        <script type="text/javascript">
            function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    reader.onload = function (e){
                        $('#image')
                            .attr('src', e.target.result)
                            .width(80)
                            .height(80);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
@endsection
