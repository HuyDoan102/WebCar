@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Roles</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Create Customer</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.customers.store') }}" method="POST">
      @csrf
      <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="text" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Dob">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Role_ID</label>
            <select class="form-control" name="role_id">
              <option value="">--None--</option>
              @foreach($roles as $role)
              <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach
            </select>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
@stop
