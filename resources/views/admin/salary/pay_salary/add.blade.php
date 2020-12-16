@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">



				<div class="row">
					<div class="col-md-6 offset-2">
                        @include('validate')
                        <div class="card pl-3 pr-3">
                            <div class="card-header">
                                <h5 class="card-title">Pay Salary <span class=" pull-right text-danger">{{ date("F Y") }}</span></h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pay_salary.create') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Employee</label>
                                       <select name="emp_id" id="" class=" form-control">
                                           <option disabled="" selected=""></option>
                                          @foreach($all_employee  as $employ)
                                          <option value="{{ $employ -> id }}">{{ $employ -> name }}</option>
                                          @endforeach

                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Month</label>
                                       <select name="month" id="" class=" form-control">
                                           <option disabled="" selected=""></option>
                                           <option value="January">January</option>
                                           <option value="February">February</option>
                                           <option value="March">March</option>
                                           <option value="April">April</option>
                                           <option value="May">May</option>
                                           <option value="June">June</option>
                                           <option value="July">July</option>
                                           <option value="August">August</option>
                                           <option value="September">September</option>
                                           <option value="October">October</option>
                                           <option value="November">November</option>
                                           <option value="December">December</option>

                                       </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Advance Salary</label>
                                        <input name="advance_salary" type="text" class="form-control" placeholder="Advance Salary" >
                                    </div>

                                    <div class="form-group">
                                        <label>Paid amonth</label>
                                        <input name="paid_amount" type="text" class="form-control" placeholder="Paid Amonth" >
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
