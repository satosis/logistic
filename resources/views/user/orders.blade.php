
@extends('layout.user')
@section('profile')<div class="lzd-playground-right">
   <div class="breadcrumb">
      <a class="first " href="//my.lazada.vn/customer/order/index/">Đơn hàng của tôi</a>
   </div>
   <div id="container" class="container">
      <div>
      @foreach($transaction as $list)
         @if($list->tst_status == 1)
         <div class="order-list">
            <div class="order-list-tabs"><span class="order-tab-item order-tab-item-active">Tất cả({{ $list->count()}})</span><span class="order-tab-item ">Chờ Thanh Toán</span><span class="order-tab-item ">Chờ vận chuyển(1)</span><span class="order-tab-item ">Chờ giao hàng</span></div>
            <div class="order-filter" ><span class="order-filter-text">Hiển thị :</span><span class="next-select medium filter" tabindex="0"> <span class="next-select-inner">5 đơn hàng gần đây</span><i class="next-icon next-icon-arrow-down next-icon-small next-select-arrow"></i></span></div>
            <div class="orders">
               <div class="order">
                  <div class="order-info">
                     <div class="pull-left">
                        <div class="info-order-left-text">Đơn hàng <a class="link"> #{$list->id} </a></div>
                        <p class="text info desc">Đặt {{ $list->created_at}}</p>
                     </div>
                     <div class="pull-cont"></div>
                     <a class="pull-right link manage" style="color: rgb(26, 156, 183);">QUẢN LÝ</a>
                     <div class="clear"></div>
                  </div>
                  <div class="order-item">
                     <div class="item-pic" ><a href="#"><img src=""></a></div>
                     <div class="item-main item-main-mini">
                        <div>
                           <div class="text title item-title"  >Tai Nghe Bluetooth Không Dây Mini I9s, Tai Nghe Nhét Tai Stereo Có Hộp Sạc Cho iPhone Android Huawei Xiaomi Samsung Tất Cả Điện Thoại Thông Minh</div>
                           <p class="text desc"></p>
                           <p class="text desc bold"></p>
                        </div>
                     </div>
                     <div class="item-quantity"><span><span class="text desc info multiply">Qty:</span><span class="text">&nbsp;1</span></span></div>
                     <div class="item-status item-capsule">
                        <p class="capsule">Đang xử lý</p>
                     </div>
                     <div class="item-info">
                        <p class="text delivery-info">Nhận hàng vào {{ $list->created_at}}</p>
                     </div>
                     <div class="clear"></div>
                     @endif
                     @endforeach 
                  </div> 
               </div>
            </div>
         </div>
      </div>
   </div>   
</div>
	@stop