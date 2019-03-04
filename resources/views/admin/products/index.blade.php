@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Product</h1>
@stop

@section('content')
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
        <div>
            <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-default"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>
        </div>
      </div>
      <div class="box-body">
        <table class="datatables-design table table-bordered table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Category_id</th>
            <th>Phone</th>
            <th>Description</th>
            <th>Status</th>
            <th>Image</th>
            <th class="nosort">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->category->name }}</td>
              <td>{{ $product->phone }}</td>
              <td>{{ str_limit($product->description, 20) }}</td>
              <td>{{ $product->status}}</td>
              <td><img height="128px" width="128px" src="{{ $product->image }}" alt="DIE"></td>
              <td>
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <button class="btn btn-sm btn-danger btn-show-delete-box" data-action="{{ route('admin.products.destroy', $product->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        @include('layouts.modal.delete')
      </div>
    </div>
@stop
