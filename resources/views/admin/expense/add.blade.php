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
                                <h4 class="card-title">Add Expense
                                    <a class="btn btn-success btn-sm pull-right ml-1" href="{{ route('today.expense') }}">TODAY</a>
                                    <a class="btn btn-info btn-sm pull-right ml-1" href="{{ route('monthly.expense') }}">MONTHLY</a>
                                    <a class="btn btn-primary btn-sm pull-right " href="{{ route('yearly.expense') }}">YEARLY</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('expense.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Expense Details</label>
                                        <textarea class=" form-control" name="details" id="" rows="4" placeholder="Expense Details"></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input name="amount" type="text" class="form-control" placeholder="Expense Amoute">
                                    </div>

                                    <div class="form-group">

                                        <input name="month" type="hidden" class="form-control" value="{{ date("F") }}">
                                    </div>
                                    <div class="form-group">

                                        <input name="year" type="hidden" class="form-control" value="{{ date("Y") }}">
                                    </div>

                                    <div class="form-group">

                                        <input name="date" type="hidden" class="form-control" value="{{ date("d-m-y") }}">
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
