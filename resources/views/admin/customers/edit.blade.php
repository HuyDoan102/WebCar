@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Customers</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Customer</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
      @csrf
      @method("PUT")
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" value="{{ $customer->email }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{ $customer->name }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="text" name="dob" value="{{ $customer->dob }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" value="{{ $customer->address }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
@stop
