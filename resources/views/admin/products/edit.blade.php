@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Quan ly Products</h1>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Update Product</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  action="{{ route('admin.products.update', $product->id) }}" method="POST">
      @csrf
      @method("PUT")
      <div class="box-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Category_id</label>
            <input type="text" name="category_id" value="{{ $product->category_id }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" value="{{ $product->phone }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" value="{{ $product->description }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <input type="text" name="status" value="{{ $product->status }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="text" name="image" value="{{ $product->image }}" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category_ID</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? "selected" : "" }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
@stop
