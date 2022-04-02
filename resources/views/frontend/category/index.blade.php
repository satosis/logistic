@extends('layout.home-page')
@section('content')
<title>{{ $title_page ?? $title_page}}</title>
<br>
<link rel="stylesheet" type="text/css" href="/core/Smarty/templates/paging/style.css">
<style>.active{color:#288ad6}</style>

<div id="product">
    <div class="wrp">
        <div id="filter">
        <div class="order">
            <div class="price">
                <span>Giá: </span>
                <div class="lstPrice">
                    <ul >
                    <li class="{{Request::get('price') == 1 ? 'active' :'' }}">
                        <a href="{{ request()->fullUrlWithQuery(['price' => 1]  ) }} ">
                            Dưới 2 triệu
                        </a>
                    </li>

                    <li class="{{Request::get('price') == 2 ? 'active' :'' }}">
                        <a href="{{ request()->fullUrlWithQuery(['price' => 2]  ) }} ">
                            Từ 2 triệu - 5 triệu
                        </a>
                    </li>

                    <li class="{{Request::get('price') == 5 ? 'active' :'' }}">
                        <a href="{{ request()->fullUrlWithQuery(['price' => 5]  ) }} ">
                            Từ 5 triệu - 10 triệu
                        </a>
                    </li>

                    <li class="{{Request::get('price') == 10 ? 'active' :'' }}">
                        <a href="{{ request()->fullUrlWithQuery(['price' => 10]  ) }} ">
                            Từ 10 triệu - 25 triệu
                        </a>
                    </li>


                    <li class="{{Request::get('price') == 50 ? 'active' :'' }}">
                        <a href="{{ request()->fullUrlWithQuery(['price' => 50]  ) }} ">
                            Trên 50 triệu
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="right">
        <div class="function odering">
            <span class="openSubOrder">Sắp xếp <i class="fa fa-caret-down"></i></span>
                    <div class="sub filter">
    <div class="group">
        <ul>
            <li>
                <label class="{{ Request::get('s') ?'':'active'}}">
                    <span class="check"><i class="fa fa-check"></i></span>
                    <span><a href="#" title="San pham noi bat">Sản phẩm nổi bật</a></span>
                </label>
            </li>
            <li>
                <label class="{{ Request::get('s')==1 ? 'active' : '' }}">
                    <span class="check"><i class="fa fa-check"></i></span>
                    <span><a href="{{ request()->fullUrlWithQuery(['s' => 2]  ) }}" title="Thap den cao">Giá thấp đến cao</a></span>
                </label>
            </li>
            <li>
                <label class="{{ Request::get('s')==2 ? 'active' : '' }}">
                    <span class="check"><i class="fa fa-check"></i></span>
                    <span><a href="{{ request()->fullUrlWithQuery(['s' => 1]  ) }}" title="Cao xuong thap">Giá cao xuống thấp</a></span>
                </label>
            </li>
        </ul>
    </div>
    <a href="javascript://" class="closeSub"><i class="fa fa-times-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    
    </div> 
    <div class="product">
    <div class="group active">
        @foreach($products as $list)
        <div class="item">
        <div class="wImage">
            <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id) }}" class="image">
                <img data-src="{{ pare_url_file($list->pro_avatar) }}" alt="{{ $list->pro_name }}" class="lazy" src="/view/lazy.jpg"/>
            </a> 
        </div>
        <div class="info">
            <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id )}}" title="" class="name">
                <h3>{{ $list->pro_name}}</h3>
            </a>
            <div style="display:flex">
            @php
            $age = $list->pro_review_total > 0 ? (int)(($list->pro_review_star - 5 ) / $list->pro_review_total) : $list->pro_review_star;
            @endphp
                @for($i=1;$i<=$age;$i++)
                <img style="width:15.96px;height:15.96px" src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"> 
                @endfor
                @for($j=$age+1;$j<=5;$j++)
                <img style="width:15.96px;height:15.96px" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"> 
                @endfor
            </div>
            <div class="price">
                <p class="new">{{ number_price($list->pro_price,0) }} đ</p>
            </div>
        <a href="{{ route('get.shopping.add' ,$list->id) }}" title=""  class="btnBuy" rel="nofollow">Mua ngay</a>
        </div>
    </div> 
                
    <style>
    a{cursor:pointer}
    .pagination li{display:inline}
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }
    .pagination>.active>a,
    .pagination>.active>a:focus, 
    .pagination>.active>a:hover, 
    .pagination>.active>span, 
    .pagination>.active>span:focus, 
    .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7;
    }
    .pagination>li:first-child>a, 
    .pagination>li:first-child>span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }
    .pagination>li:last-child>a, 
    .pagination>li:last-child>span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    </style>
    <!-- <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}"> -->
    @endforeach
    <div class="box-footer">
            {!! $products->appends($query ?? [])->links()!!}    
    </div>               
            </div>
        
    </div> 
        </div>

    </div>

                
        </div>
    </div>
    @stop