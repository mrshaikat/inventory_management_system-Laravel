@extends('frontend.layouts.app')
       
@section('main-content')
        <!-- start page title area-->
        <div class="page-title-area ptb-100">
            <div class="container">
                <div class="page-title-content">
                    <h1>Cart</h1>
                    <ul>
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="item"><a href="cart.html"><i class='bx bx-chevrons-right'></i>Cart</a></li>
                    </ul>
                </div>
			</div>
			<div class="bg-image">
				<img src="frontend/assets/img/page-title-area/cart.jpg" alt="Demo Image">
			</div>
        </div>
        <!-- end page title area -->

        <!-- start cart section -->
        <section id="cart" class="cart-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Product</th>
                                        <th class="price-col">Price</th>
                                        <th class="qty-col">Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="#" class="product-image">
                                                    <img src="frontend/assets/img/cart1.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="#">Asia Tour</a>
                                            </h3>
                                        </td>
                                        <td>$17.90</td>
                                        <td>
                                            <input class="quantity form-control" value="0" type="text">
                                        </td>
                                        <td>$17.90</td>
                                    </tr>
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="#" class="btn-move">Move to Wishlist</a>
                                            </div>
                                            
                                            <div class="float-right">
                                                <a href="#" class="btn-edit"><i class='bx bx-pencil'></i></a>
                                                <a href="#" class="btn-remove"><i class='bx bx-x'></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="#" class="product-image">
                                                    <img src="frontend/assets/img/cart2.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="#">Brazil Tour</a>
                                            </h3>
                                        </td>
                                        <td>$8.90</td>
                                        <td>
                                            <input class="quantity form-control" value="0" type="text">
                                        </td>
                                        <td>$8.90</td>
                                    </tr>
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="#" class="btn-move">Move to Wishlist</a>
                                            </div>
                                            
                                            <div class="float-right">
                                                <a href="#" class="btn-edit"><i class='bx bx-pencil'></i></a>
                                                <a href="#" class="btn-remove"><i class='bx bx-x'></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                            </div>

                                            <div class="float-right">
                                                <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Summary</h3>

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>$17.90</td>
                                    </tr>

                                    <tr>
                                        <td>Tax</td>
                                        <td>$0.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>$17.90</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="#" class="btn btn-block btn-sm btn-primary">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cart section -->
@endsection