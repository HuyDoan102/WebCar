@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Customer</h1>
@stop

@section('content')
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
        <div>
            <a href="{{ route('admin.customers.create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>
        </div>
      </div>
      <div class="box-body">
        <table class="datatables-design table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Phone</th>
            <th class="nosort">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($customers as $customer)
            <tr>
              <td>{{ $customer->id }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->dob }}</td>
              <td>{{ str_limit($customer->address, 10) }}</td>
              <td>{{ $customer->phone }}</td>
              <td>
                <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <button class="btn btn-sm btn-danger btn-show-delete-box" data-action="{{ route('admin.customers.destroy', $customer->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        @include('layouts.modal.delete')
      </div>
    </div>
@stop
