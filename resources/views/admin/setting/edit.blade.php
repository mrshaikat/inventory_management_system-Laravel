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
                                <h4 class="card-title text-primary">Update {{ ($all_data -> name) }}'s Information</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('update.employee',$all_data -> id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" type="text" class="form-control" value="{{ ($all_data -> name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input name="email" type="text" class="form-control" placeholder="E-mail" value="{{ ($all_data -> email) }}" >
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ ($all_data -> phone) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Exprience</label>
                                        <input name="exprience" type="text" class="form-control" placeholder="Exprience" value="{{ ($all_data -> exprience) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" type="text" class="form-control" placeholder="Address" value="{{ ($all_data -> address) }}">
                                    </div>
                                    <div class="form-group">
                                        <label>NID NO</label>
                                        <input name="nid_no" type="text" class="form-control" placeholder="National ID Number" value="{{ ($all_data -> nid_no) }}">
                                    </div>


                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input name="salary" type="text" class="form-control" placeholder="Salary" value="{{ ($all_data -> salary) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Vacation</label>
                                        <input name="vacation" type="text" class="form-control" placeholder="Vacation" value="{{ ($all_data -> vacation) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <input name="city" type="text" class="form-control" placeholder="City" value="{{ ($all_data -> city) }}">
                                    </div>

                                    <div class="form-group">

 @if( !empty($all_data -> photo) )
                                            <img style="height: 100px; width: 100px;" src="{{ URL::to('/') }}/media/employee_photos/{{ $all_data -> photo }}" alt="">
                                            @endif <br>

                                            <input type="hidden" name="old_picture" value="{{ $all_data -> photo }}">

                                          
                                        <img class="" id="image" src="#"><label>Photo</label> 
                                        <br>
                                        
                                        



                                        <input type="file" name="new_picture" accept="image/*" class="upload" onchange="readURL(this);">
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
