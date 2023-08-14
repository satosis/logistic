<style>
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked)>input {
    position: absolute;
    display: none;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rated:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.rate>input:checked~label {
    color: #ffc700;
}

.rate:not(:checked)>label:hover,
.rate:not(:checked)>label:hover~label {
    color: #deb217;
}

.rate>input:checked+label:hover,
.rate>input:checked+label:hover~label,
.rate>input:checked~label:hover,
.rate>input:checked~label:hover~label,
.rate>label:hover~input:checked~label {
    color: #c59b08;
}

.star-rating-complete {
    color: #c59b08;
}

.rating-container .form-control:hover,
.rating-container .form-control:focus {
    background: #fff;
    border: 1px solid #ced4da;
}

.rating-container textarea:focus,
.rating-container input:focus {
    color: #000;
}

.rated {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rated:not(:checked)>input {
    position: absolute;
    display: none;
}

.rated:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ffc700;
}

.rated:not(:checked)>label:before {
    content: '★ ';
}

.rated>input:checked~label {
    color: #ffc700;
}

.rated:not(:checked)>label:hover,
.rated:not(:checked)>label:hover~label {
    color: #deb217;
}

.rated>input:checked+label:hover,
.rated>input:checked+label:hover~label,
.rated>input:checked~label:hover,
.rated>input:checked~label:hover~label,
.rated>label:hover~input:checked~label {
    color: #c59b08;
}
</style>
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

        <div class="item">
            <p class="text-secondary">Số đơn hàng : {{$logistics->order_number }}</p>
        </div>
        <div class="item">
            <p class="text-secondary">Tên khách hàng: {{$logistics->customer_name }}</p>
        </div>
        <div class="item">
            <p class="text-secondary">Địa chỉ người nhận: {{$logistics->recipient_address }}</p>
        </div>
        <div class="item">
            <p class="text-secondary">Địa chỉ giao hàng: {{$logistics->shipping_address }}</p>
        </div>
        <div class="item">
            <p class="text-secondary">Ngày giao hàng: {{$logistics->shipping_date }}</p>
        </div>
        <div class="item">
            <p class="text-secondary">Ngày giao hàng dự kiến: {{$logistics->delivery_date }}</p>
        </div><br>
        <h2 class="pdp-mod-section-title outer-title">Đánh giá và nhận xét </h2>
        @if(!empty($rating))
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <p class="font-weight-bold ">Review</p>
                    @foreach($rating as $list)
                    <div class="form-group row">
                        <div class="col">
                            <div class="rated">
                                @for($i=1; $i<=$list->r_number; $i++)
                                    {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                    <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col">
                            <p>{{ $list->r_content }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <form class="py-2 px-4" action="{{route('admin.review.store')}}" style="padding:30px"
                        style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                        @csrf
                        <input type="hidden" name="r_product_id" value="{{$logistics->id }}">
                        <p class="font-weight-bold ">Review</p>
                        <div class="form-group row">
                            <div class="col">
                                <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="r_number" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="r_number" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="r_number" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="r_number" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="r_number" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col">
                                <textarea class="form-control" name="r_content" rows="6 " placeholder="Comment"
                                    maxlength="200"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 text-right">
                            <button class="btn btn-sm py-2 px-3 btn-info">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</section>
<!-- /.content-wrapper -->
</div>

@stop
