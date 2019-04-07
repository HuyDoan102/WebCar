@extends('layouts.UI.layouts')

@section('UI.content')
    <div class="header-bottom">
        <div class="header_bottom_right_images">
            @if (session()->has('cart'))
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>&nbsp;</th>
                                <th>Quantity</th>
                                <th>&nbsp;</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($cart->getProducts() as $product)
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="{{ route('carts.removeItem', $product->getProduct()->id) }}"><span class="fa fa-times" aria-hidden="true"></span></a></td>

                                        <td class="image-prod"><img height="80px" width="200px" src="{{ $product->getProduct()->image }}" alt=""></td>

                                        <td class="product-name">
                                            <h3>{{ $product->getProduct()->name }}</h3>
                                            <p>{{ str_limit($product->getProduct()->description, 50) }}</p>
                                        </td>

                                        <td class="price">{{ $product->getProduct()->price }}</td>

                                        <td><a href="{{ route('carts.reduceByOne', $product->getProduct()->id) }}"><span class="fa fa-minus" aria-hidden="true"></span></a></td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity" class="quantity form-control input-number" value="{{ $product->getQuantity() }}" disabled min="1" max="100">
                                            </div>
                                        </td>

                                        <td><a href="{{ route('carts.increaseByOne', $product->getProduct()->id) }}"><span class="fa fa-plus" aria-hidden="true"></span></a></td>

                                        <td>{{ $product->getTotalPrice() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <strong>Total: {{ $totalPrice }}</strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <a href="{{ route('carts.checkout') }}" type="button" class="btn btn-success">Checkout</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        <h2>No Items in Cart!</h2>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
