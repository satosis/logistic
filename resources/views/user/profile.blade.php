
@extends('layout.user')
@section('profile')

    <div class="lzd-playground-right">
   <div class="breadcrumb"><a>Thông tin cá nhân</a></div>
   <div id="container" class="container">
      <div class="my-profile" >
         <div class="my-profile-bd">
            <div class="my-profile-item">
               <h3 class="my-profile-item-title">Họ tên</h3>
               <div class="my-profile-item-info">Hùng Nguyễn</div>
            </div>
            <div class="my-profile-item">
               <h3 class="my-profile-item-title"><span>Địa chỉ email</span> <span class="gray">|</span> <a data-spm="demail_change">Thay đổi</a></h3>
               <div class="my-profile-item-info">hung0913003358@gmail.com</div>
            </div>
            <div class="my-profile-item">
               <h3 class="my-profile-item-title">Số điên thoại <span class="gray">|</span> <a data-spm="dmobile_add">Thêm</a></h3>
               <div class="my-profile-item-info"><span class="gray">Vui lòng nhập số điện thoại của bạn</span></div>
            </div>
            <div class="my-profile-item">
               <h3 class="my-profile-item-title">Ngày sinh</h3>
               <div class="my-profile-item-info"><span class="gray">Vui lòng nhập sinh nhật của bạn</span></div>
            </div>
            <div class="my-profile-item">
               <h3 class="my-profile-item-title">Giới tính</h3>
               <div class="my-profile-item-info"><span class="gray">Nhập giới tính của bạn</span></div>
            </div>
            <div class="my-profile-item">
               <h3 class="my-profile-item-title">Mã số thuế</h3>
               <div class="my-profile-item-info"><span class="gray">Nhập mã số thuế của bạn</span></div>
            </div>
         </div>
         <div class="my-profile-ft"><a href="{{ route('get.user.edit')}}"><button type="a" class="next-btn next-btn-warning next-btn-normal next-btn-large">SỬA THÔNG TIN</button></a><a href="{{ route('get.user.change_password') }}" class="next-btn next-btn-warning next-btn-normal next-btn-large">THAY ĐỔI MẬT KHẨU</a></div>
      </div>
   </div>
</div>
@stop