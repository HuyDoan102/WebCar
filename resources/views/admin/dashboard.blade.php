@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
    </section>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            {{ count($orders) }}
                        </h3>
                        <p>
                            Đơn Hàng
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.orders.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            {{ count($products) }}
                        </h3>
                        <p>
                            Product
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <a href="{{ route('admin.products.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            {{ count($customers) }}
                        </h3>
                        <p>
                            Khách Hàng
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('admin.customers.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            {{ count($suppliers) }}
                        </h3>
                        <p>
                            Suppliers{{--Nhà cung cấp--}}
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <a href="{{ route('admin.suppliers.index') }}" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->
    </section>
    <div class="col-md-12 d-flex align-self-stretch">
        <div class="map"></div>
    </div>
@endsection
