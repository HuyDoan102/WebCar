@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Admin</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Admin</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
      @csrf
      @method("PUT")
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" value="{{ $admin->email }}" class="form-control" id="exampleInputEmail1" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{ $admin->name }}" class="form-control" id="exampleInputEmail1" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="text" name="dob" value="{{ $admin->dob }}" class="form-control" id="exampleInputEmail1" placeholder="dob">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" value="{{ $admin->address }}" class="form-control" id="exampleInputEmail1" placeholder="address">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" value="{{ $admin->phone }}" class="form-control" id="exampleInputEmail1" placeholder="phone">
        </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
@stop
