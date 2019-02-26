@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Roles</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Create Role</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.roles.store') }}" method="POST">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </form>
  </div>
@stop
