@extends('layouts.UI.layouts')

@section('UI.content')
    <div class="header-bottom">
        <div class="header_bottom_right_images">
            <section class="home-slider owl-carousel">

                <div class="slider-item" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text justify-content-center align-items-center">

                            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                                <h1 class="mb-3 mt-5 bread">Checkout</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section">
                <div class="container">
                    <form action="{{ route('carts.checkout') }}" method="POST">
                        @csrf
                        <div class="row billing-form ftco-bg-dark p-3 p-md-5">
                            <div class="col-xl-8">
                                <h3 class="mb-4 billing-heading">Billing Details</h3>
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="emailaddress">Email Address *</label>
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Name *</label>
                                            <p>{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone *</label>
                                            <p>{{ Auth::user()->phone }}</p>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">City *</label>
                                            <div class="select-wrap">
                                                <select name="delivery_city" id="" class="form-control" required>
                                                    <option value="Da Nang">Da Nang</option>
                                                    <option value="TP Ho Chi Minh">TP Ho Chi Minh</option>
                                                    <option value="Ha Noi">Ha Noi</option>
                                                    <option value="Hai Phong">Hai Phong</option>
                                                    <option value="Can Tho">Can Tho</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">District *</label>
                                            <div class="select-wrap">
                                                <select name="delivery_district" id="" class="form-control" required>
                                                    <option value="Cam Le">Cam Le</option>
                                                    <option value="Hai Chau">Hai Chau</option>
                                                    <option value="Lien Chieu">Lien Chieu</option>
                                                    <option value="Thanh Khue">Thanh Khue</option>
                                                    <option value="Ngu Hanh Son">Ngu Hanh Son</option>
                                                    <option value="Hoa Vang">Hoa Vang</option>
                                                    <option value="Hoang Sa">Hoang Sa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="streetaddress">Wards *</label>
                                            <input type="text" name="delivery_ward" class="form-control" placeholder="Wards name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="streetaddress">Street Address *</label>
                                            <input type="text" class="form-control" name="delivery_street" placeholder="House number and street name" required>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <div class="radio">
                                                <label for="streetaddress">NOTE *</label>
                                                <p>Thời gian giao hàng tối đa là 1 giờ kể từ lúc quý khách đặt hàng.</p>
                                                <input type="text" class="form-control" value="Thời gian giao hàng tối đa là 1 giờ kể từ lúc quý khách đặt hàng." name="notes" hidden/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="col-md-12">
                                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                        <h3>Cart Totals</h3>
                                        <p class="d-flex">
                                            <span>Total: </span>
                                            <span>{{ $total }}</span>
                                            <input type="hidden" name="total_price" value="{{ $total }}">

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="" class="mr-2"> Receive money on delivery</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary py-3 px-4">Place an order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
