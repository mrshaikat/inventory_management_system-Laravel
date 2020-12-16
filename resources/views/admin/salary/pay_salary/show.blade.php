@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">


                <div class="card">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">{{ $all_data -> name }}</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table-data" class="table table-striped mb-0">

                                @if( !empty($all_data -> photo) )
                                <img id="table_img" src="{{ URL::to('/') }}/media/employee_photos/{{ $all_data -> photo }}" alt="centered image">
                                @endif

                                <tbody class="text-center">
                                  <tr>
                                      <td>Name</td>
                                      <td>{{ $all_data -> name }}</td>
                                  </tr>

                                  <tr>
                                    <td>E-mail</td>
                                    <td>{{ $all_data -> email }}</td>
                                </tr>

                                <tr>
                                    <td>Phone Number</td>
                                    <td>{{ $all_data -> phone }}</td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>{{ $all_data -> address }}</td>
                                </tr>

                                <tr>
                                    <td>NID NO</td>
                                    <td>{{ $all_data -> nid_no }}</td>
                                </tr>

                                <tr>
                                    <td>Exprience</td>
                                    <td>{{ $all_data -> exprience }}</td>
                                </tr>

                                <tr>
                                    <td>Vacation</td>
                                    <td>{{ $all_data -> vacation }}</td>
                                </tr>

                                <tr>
                                    <td>City</td>
                                    <td>{{ $all_data -> city }}</td>
                                </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




			</div>
		</div>

@endsection
