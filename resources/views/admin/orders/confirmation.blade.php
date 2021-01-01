@extends('admin.layouts.app')

@section('main-content')
		<!-- Page Wrapper -->
        <div class="page-wrapper">

			<div class="content container-fluid">




                        <div class="container">
                            <div class="card">
                          <div class="card-header">
                          Invoice #<br>
                          <strong>Today Date: {{ date("l jS \of F Y h:i:s A") }}</strong>
                            <span class="float-right"> <strong>Order Date:</strong> {{ $order -> order_date  }}</span> <br>
                            <span class="float-right"> <strong>Order Status:</strong> <span class=" badge badge-danger"> {{ $order -> order_status }}</span></span> <br>
                            <span class="float-right"> <strong class="mr-5">Order ID:</strong> <span> {{ $order -> id  }}</span></span> <br>




                          </div>
                          <div class="card-body">
                          <div class="row mb-4">


                          <div class="col-sm-6">

                          <div>
                          <strong>
                            <div>Shop Name: {{ $order -> shope_name }}</div>
                        </strong>

                          </div>
                          <div>Name: {{ $order -> name }}</div>

                          <div>Email: {{ $order -> email }}</div>
                          <div>Phone: {{ $order -> phone }}</div>
                          <div>Address: {{ $order -> address }}</div>
                          </div>



                          </div>

                          <div class="table-responsive-sm">
                          <table class="table table-striped">
                          <thead>
                          <tr>
                          <th class="center">SL</th>
                          <th>Product Name</th>


                          <th class="right">Pruduct Code</th>
                            <th class="center">Quantity</th>
                            <th class="center">Unit Cost</th>
                          <th class="right">Total</th>
                          </tr>

                          </thead>
                          <tbody>

                            @foreach($order_details as $ord)
                            <tr>
                                <td class="center">{{ $loop -> index+1  }}</td>
                                <td class="left strong">{{ $ord -> product_name }}</td>
                                <td class="left strong">{{ $ord -> product_code }}</td>
                                <td class="left">{{ $ord -> quantity }}</td>
                                <td class="left">{{ $ord -> unitcost }}</td>
                                <td class="left">{{ $ord -> quantity*$ord -> unitcost }}</td>


                                </tr>
                            @endforeach




                          </tbody>
                          </table>
                          </div>
                          <div class="row">
                          <div class="col-lg-4 col-sm-5">

                            <table class="mt-5 mb-3">
                                <tbody>
                                <tr>
                                <td class="left">
                                <strong>Payment By: </strong>
                                </td>
                                <td class="right"> {{ $order -> payment_status }}</td>
                                </tr>
                                {{-- <tr>
                                <td class="left">
                                <strong>Discount (20%)</strong>
                                </td>
                                <td class="right">$1,699,40</td>
                                </tr> --}}
                                <tr>
                                <td class="left">
                                 <strong>Pay: </strong>
                                </td>
                                <td class="right">{{ $order -> pay }}</td>
                                </tr>
                                <tr>
                                <td class="left">
                                <strong>Due:</strong>
                                </td>
                                <td class="right">
                                <strong>{{ $order -> due }}</strong>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                          </div>

                          <div class="col-lg-4 col-sm-5 ml-auto">
                          <table class="table table-clear">
                          <tbody>
                          <tr>
                          <td class="left">
                          <strong>Subtotal</strong>
                          </td>
                          <td class="right">{{ $order -> sub_total }}</td>
                          </tr>
                          {{-- <tr>
                          <td class="left">
                          <strong>Discount (20%)</strong>
                          </td>
                          <td class="right">$1,699,40</td>
                          </tr> --}}
                          <tr>
                          <td class="left">
                           <strong>VAT (21%)</strong>
                          </td>
                          <td class="right">{{ $order -> vat }}</td>
                          </tr>
                          <tr>
                          <td class="left">
                          <strong>Total</strong>
                          </td>
                          <td class="right">
                          <strong>{{ $order -> total }}</strong>
                          </td>
                          </tr>
                          </tbody>
                          </table>

                          </div>

                          </div>

                          @if( $order -> order_status = 'success')
                          @else
                          <a  href="{{ route('pos.order', $odr_id -> id ) }}" class="btn btn-primary pull-right mt-5 text-white">Done</a>

                          <a class="btn btn-secondary pull-right mt-5 mr-2 text-white" onclick="window.print()"><i class="fa fa-print"></i></a>
                          @endif


                          </div>


                          </div>

                          </div>



		</div>
        <!-- /Page Wrapper -->

        {{-- <div id="customer-modal" class=" modal fade">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h4 class="modal-title">Invoice of  {{ $all_customer -> name }}

                        </h4>



                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('invoice.final') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for=""><strong>Payment</strong></label>
                                   <select class=" form-control" name="payment_status" id="">
                                       <option value="HandCash">HandCash</option>
                                       <option value="Cheque">Cheque</option>
                                       <option value="Due">Due</option>
                                   </select>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for=""><strong>Pay</strong></label>
                                    <input name="pay" type="text" class="form-control" id="" placeholder="Pay" value="" >

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for=""><strong>Due</strong></label>
                                    <input name="due" type="text" class="form-control" id="" placeholder="Due" value="" >

                                </div>
                            </div>

                            <input type="hidden" name="customer_id" value="{{ $all_customer -> id }}">
                            <input type="hidden" name="order_date" value="{{ date("d-m-y") }}">
                            <input type="hidden" name="order_status" value="pending">
                            <input type="hidden" name="total_products" value="{{ Cart::count() }}">
                            <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
                            <input type="hidden" name="vat" value="{{ Cart::tax() }}">
                            <input type="hidden" name="total" value="{{ Cart::total() }}">


                           <div class="modal-footer">
                            <div class="form-group">
                                <button class="btn btn-secondary waves-effect" type="submit" value="" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-info" type="submit" value="">Submit</button>
                            </div>
                           </div>

                        </form>
                    </div>

                </div>
            </div>
        </div> --}}







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
