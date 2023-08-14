@extends('layout.admin')
@section('content')
    <style>li {
            list-style: none
        }</style>
    <title>Quản lý đơn hàng</title>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        <form class="form-inline">
                            <input type="text" class="form-control" value="{{ Request::get('order_number') }}" name="order_number"
                                   placeholder="Số đơn hàng">
                            <input type="text" class="form-control" value="{{ Request::get('customer_name') }}" name="customer_name"
                                   placeholder="Tên khách hàng">
                            Ngày giao hàng <input type="date" class="form-control" value="{{ Request::get('shipping_date') }}" name="shipping_date"
                                   placeholder="Ngày giao hàng">

                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
                            <small><a href="{{ route('admin.logistic.create') }}" class="btn btn-success">Thêm mới</a></small>
                        </form>
                    </div>
                    <table class="table text-center">
                        <thead>
                        <td>#</td>
                        <td>Số đơn hàng</td>
                        <td>Tên khách hàng</td>
                        <td>Ngày giao hàng</td>
                        <td>Ngày giao hàng dự kiến</td>
                        <td>Trạng thái</td>
                        <td>Hành động</td>
                        </thead>
                        @if(!count($logistic))
                            <tbody>
                            <tr>
                                <th colspan="8">Không có đơn hàng mới</th>
                            </tr>
                            </tbody>
                        @endif
                        @foreach($logistic as $key =>$list)
                            <tbody>
                            <td>{{ ++$key }}</td>
                            <td>{{ $list->order_number }}</td>
                            <td>{{ $list->customer_name }}</td>
                            <td>{{ $list->shipping_date }}</td>
                            <td>{{ $list->delivery_date }}</td>

                            <td>
      <span class="{{ $list->getStatus($list->status)['class'] }}">
      {{ $list->getStatus($list->status)['name']}}
      </span></td>
                            <td>
                                <a href="{{ route('admin.logistic.detail',$list->id)}}"><i class="fa fa-edit"></i> Chi tiết</a>
                                <a href="{{ route('admin.logistic.update',$list->id)}}"><i class="fa fa-edit"></i> Chỉnh sửa</a>

                                <a href="{{ route('admin.action.logistic',['delete',$list->id])}}"><i
                                                        class="fa fa-ban"></i>Xóa đơn hàng</a>
                                                        <div class="btn-group">
                                    <button class="btn btn-success btn-xs">Đổi trạng thái</button>
                                    <button class="btn btn-success  btn-xs dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('admin.action.logistic',['process',$list->id])}}"><i
                                                        class="fa fa-ban"></i>Đang bàn giao</a></li>
                                        <li><a href="{{ route('admin.action.logistic',['success',$list->id])}}"><i
                                                        class="fa fa-ban"></i>Đã bàn giao</a></li>
                                        <li><a href="{{ route('admin.action.logistic',['confirm',$list->id])}}"><i
                                                        class="fa fa-ban"></i>Người dùng đã xác nhận</a></li>
                                        <li><a href="{{ route('admin.action.logistic',['cancel',$list->id])}}"><i
                                                        class="fa fa-ban"></i>Hủy</a></li>
                                    </ul>
                                </div>

                            </td>
                            </tbody>

                        @endforeach
                    </table>
        </section>
        <div class="box-footer">
            {!! $logistic->appends($query ?? [])->links() !!}
        </div>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

    <div class="modal fade fade" id="modal-preview-logistic">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"> Chi tiết đơn hàng <b id="idlogistic">#1</b></h4>
                </div>
                <div class="modal-body">
                    <div class="content">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@stop
