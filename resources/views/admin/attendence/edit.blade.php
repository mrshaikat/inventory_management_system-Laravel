@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Update Attendence


                        </h4>

                        <h4><span class=" text-info">{{ date("d F") }}</span> (<span class=" text-danger">{{date("d-m-y")}}</span>)</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped mb-0">
                                <thead>


                                    <tr>
                                        <th>SL</th>

                                        <th>Name</th>
                                        <th>Photo</th>




                                        <th>Attendence</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form action="{{ route('attendence.update', $date -> edit_date) }}" method="POST">
                                        @csrf
                                        @method('PUT')


                                        @foreach($all_data as $data)
                                        <tr>
                                            <td>{{ $loop -> index+1 }}</td>



                                            <td>{{ $data -> employees -> name}}</td>

                                            <td>
                                                @if( !empty( $data -> employees -> photo) )
                                                <img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/media/employee_photos/{{  $data -> employees -> photo}}" alt="">
                                                @endif



                                            </td>

                                            <input type="hidden" name="id[]" value="{{ $data -> id }}">

                                             <td>

                                                <input
                                                @php
                                                    if( $data -> attendence == 'Present')
                                                   echo "checked";
                                                @endphp
                                                class=" mr-1" type="radio" name="attendence[{{ $data -> id }}]" value="Present"><label class=" mr-3" for="">Present</label>

                                                <input
                                                @php
                                                if( $data -> attendence == 'Absent')
                                               echo "checked";
                                            @endphp
                                                class=" mr-1" type="radio" name="attendence[{{ $data -> id }}]" value="Absent"><label for="">Absent</label>
                                            </td>

                                            <input type="hidden" name="att_date" value="{{ $data -> att_date }}">
                                            <input type="hidden" name="att_year" value="{{ $data -> att_year }}">
                                            <input type="hidden" name="att_month" value="{{ $data -> att_month }}">
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>
                            <button type="submit" class="btn btn-success mt-3">Update Attendence</button>
                        </form>
                        </div>
                    </div>
                </div>




			</div>
		</div>

@endsection
