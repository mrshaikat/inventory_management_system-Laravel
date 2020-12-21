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
                                <h4 class="card-title">Add Employe</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('insert-employee') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="Name" >
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input name="email" type="text" class="form-control" placeholder="E-mail" >
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Phone" >
                                    </div>
                                    <div class="form-group">
                                        <label>Exprience</label>
                                        <input name="exprience" type="text" class="form-control" placeholder="Exprience" >
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" type="text" class="form-control" placeholder="Address" >
                                    </div>
                                    <div class="form-group">
                                        <label>NID NO</label>
                                        <input name="nid_no" type="text" class="form-control" placeholder="National ID Number">
                                    </div>


                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input name="salary" type="text" class="form-control" placeholder="Salary">
                                    </div>

                                    <div class="form-group">
                                        <label>Vacation</label>
                                        <input name="vacation" type="text" class="form-control" placeholder="Vacation">
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input name="city" type="text" class="form-control" placeholder="City">
                                    </div>

                                    <div class="form-group">

                                        <img class="" id="image" src="#"><label>Photo</label> <br>

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
