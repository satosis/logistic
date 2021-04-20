
@extends('layout.user')
@section('profile')
 
<div class="lzd-playground-right">
   <div class="breadcrumb" ><a>Chỉnh sửa địa chỉ</a></div>
   <form action="" method="post">
   @csrf
   <div id="container" class="container">
      <div class="update"  >
         <div class="mod-address-update">
            <div>
               <form>
                  <div class="mod-address-form mod-vn" >
                     <div class="mod-address-form-bd">
                        <div class="mod-address-form-left">
                           <div class="mod-input floating mod-input-name">
                              <label>Tên</label><input type="text" placeholder="Họ Tên" value="{{ \Auth::user()->user }}"><b></b><span></span>
                              <div class="mod-input-close-icon"></div>
                           </div>
                           <div class="mod-input floating mod-input-phone">
                              <label>Số điện thoại</label><input type="number" placeholder="Xin vui lòng điền số điện thoại của bạn" value="{{\Auth::user()->phone}}" pattern="[0-9]*"><b></b><span></span>
                              <div class="mod-input-close-icon"></div>
                           </div>
                        </div>
                        <div class="mod-address-form-right">
                           <div class="mod-input floating mod-input-detailAddress">
                              <label>Địa chỉ nhận hàng</label><input type="text" name="location" placeholder="Vui lòng nhập địa chỉ của bạn" value="{{ \Auth::user()->location }}"><b></b><span></span>
                              <div class="mod-input-close-icon"></div>
                           </div>
                           <!-- <div class="mod-select floating mod-address-form-select mod-select-location-tree-1"><label>Tỉnh/ Thành phố</label><span value="R1875748---An Giang" class="next-select large" tabindex="0"><input type="hidden" name="select-faker" value="R1875748---An Giang"><span class="next-select-inner">An Giang</span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span><b></b></div>
                           <div class="mod-select floating mod-address-form-select mod-select-location-tree-2"><label>Quận/ Huyện</label><span value="R7147138---Thành Phố Châu Đốc" class="next-select large" tabindex="0"><input type="hidden" name="select-faker" value="R7147138---Thành Phố Châu Đốc"><span class="next-select-inner">Thành Phố Châu Đốc</span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span><b></b></div>
                           <div class="mod-select floating mod-address-form-select mod-select-location-tree-3"><label>Phường/ Xã</label><span value="R80002981---Phường Châu Phú B" class="next-select large" tabindex="0"><input type="hidden" name="select-faker" value="R80002981---Phường Châu Phú B"><span class="next-select-inner">Phường Châu Phú B</span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span> </div > -->
                        </div>
                     </div>
                     <div class="mod-address-form-action"><a href="{{ route('get.user.address')}}" class="next-btn next-btn-normal next-btn-medium mod-address-form-btn-cancel">HUỶ</a><button tabindex="7" type="submit" class="next-btn next-btn-primary next-btn-large mod-address-form-btn">LƯU</button></div>
                  </div>
               </form>< 
            </div>
         </div>
      </div>
   </div>
</div>
@stop