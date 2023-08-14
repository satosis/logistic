@extends('layout.admin')
@section('content')
    <title>Thêm đơn hàng</title>
    <div class="content-wrapper">

        <section class="content-header">
            <!-- Content Header (Page header) -->
            <h1> Thay đôi thông tin đơn hàng</h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.logistic.index') }}"> Trang chủ</a></li>
                <li><a href="{{ route('admin.logistic.index') }}">Đơn hàng</li>
                >
                <li><a href="#" class="active">Thay đổi</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('admin.logistic.form')

        </section>
        <!-- /.content -->
        </section>
        <!-- /.content-wrapper -->
    </div>

@stop
