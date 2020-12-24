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
                                <h4 class="card-title">Products Import
                                <a class="pull-right btn btn-success btn-sm" href="{{ route('export') }}">Download <strong>Xlsx</strong></a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Xlsx</strong> File Import</label>
                                        <input name="import_file" type="file" class="form-control" >
                                    </div>


                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                            <small class="text-danger p-2">
                                <strong>
                                    Please download the xlsx file and clear it | Now you write your all products by listing and import it again | Thank You.
                                </strong>
                            </small>
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
