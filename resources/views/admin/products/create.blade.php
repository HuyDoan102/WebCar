@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Products</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Create Product</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.products.store') }}" method="POST">
      @csrf
      <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="description">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="status">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="text" name="image" class="form-control" id="exampleInputEmail1" placeholder="image">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Category_ID</label>
            <select class="form-control" name="category_id">
              <option value="">--None--</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
@stop
