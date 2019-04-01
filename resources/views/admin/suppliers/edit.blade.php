@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Supplier</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Supplier</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
      @csrf
      @method("PUT")
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" value="{{ $supplier->name }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
@stop
