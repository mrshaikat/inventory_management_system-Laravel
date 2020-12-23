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
                                <h4 class="card-title">Add Company Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('setting.update', $setting -> id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input name="company_name" type="text" class="form-control" placeholder="Company Name" value="{{ $setting -> company_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Company E-mail</label>
                                        <input name="company_email" type="text" class="form-control" placeholder="E-mail" value="{{ $setting -> company_email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Phone Number</label>
                                        <input name="company_phone" type="text" class="form-control" placeholder="Phone" value="{{ $setting -> company_phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company City</label>
                                        <input name="company_city" type="text" class="form-control" placeholder="Company City" value="{{ $setting -> company_city }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company County</label>
                                        <input name="company_country" type="text" class="form-control" placeholder="Company Country" value="{{ $setting -> company_country }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Zipcode</label>
                                        <input name="company_zipcode" type="text" class="form-control" placeholder="Company Zipcode" value="{{ $setting -> company_zipcode }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Company Address</label>
                                        <input name="company_address" type="text" class="form-control" placeholder="Address" value="{{ $setting -> company_address }}">
                                    </div>




                                    <div class="form-group">

                                        @if( !empty($setting -> company_logo) )
                                        <img style="height: 100px; width: 100px;" src="{{ URL::to('/') }}/media/company_photos/{{ $setting -> company_logo }}" alt="">
                                        @endif <br>

                                        <input type="hidden" name="old_picture" value="{{ $setting -> company_logo }}">


                                    <img class="" id="image" src="#"><label>Photo</label>
                                    <br>





                                    <input type="file" name="company_logo" accept="image/*" class="upload" onchange="readURL(this);">
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
