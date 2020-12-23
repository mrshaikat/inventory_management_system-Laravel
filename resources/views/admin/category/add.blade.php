@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container">



				<div class="row">
					<div class="col-md-8 offset-2">
                        @include('validate')
                        <div class="card pl-3 pr-3">
                            <div class="card-header">
                                <h4 class="card-title">Add Category
                                <a class="pull-right btn btn-success btn-sm" href="{{ route('category.index') }}">All Categories</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input name="cat_name" type="text" class="form-control" placeholder="Category Name" >
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
