@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Dat Hang</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <div class="box-body">
            <table class="datatables-design table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Price</th>
                    <th>Date Of Sell</th>
                    <th>Status</th>
                    <th class="nosort">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->date_of_sell }}</td>
                        <td><span class="label label-{{ convertClassOrderStatus($order->status) }}">{{ convertNameOrderStatus($order->status) }}</span></td>
                        <td>
                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <button class="btn btn-sm btn-danger btn-show-delete-box" data-action="{{ route('admin.orders.destroy', $order->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('layouts.modal.delete')
        </div>
    </div>
@stop
