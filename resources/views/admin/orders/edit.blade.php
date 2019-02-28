@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Order</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Update Order #{{ $order->id }}</h3>
        </div>
        <form  action="{{ route('admin.orders.update', $order->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="box-body">
                <div class="form-group">
                    <p>Status: <span class="label label-{{ convertClassOrderStatus($order->status) }}">{{ convertNameOrderStatus($order->status) }}</span></p>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" value="{{ $order->price }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>Date Of Sell</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="date_of_sell" value="{{ $order->date_of_sell }}" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@stop
