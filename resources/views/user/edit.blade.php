
@extends('layout.user')
@section('profile')
 
	
<div class="lzd-playground-right">
   <div class="breadcrumb" ><a>Chỉnh sửa</a></div>
   <div id="container" class="container">
      <div>
      <form action="" method="post">
      @csrf
         <div class="edit-profile"  >
            <div class="edit-profile-bd">
               <div class="edit-profile-item">
                  <h3 class="edit-profile-item-title">Họ tên</h3>
                  <div class="edit-profile-item-info">
                     <div class="mod-input floating edit-profile-input-name mod-input-name">
                        <input type="text" name="user" placeholder="Họ Tên"  value="{{ isset(\Auth::user()->user) ? \Auth::user()->user :\Auth::user()->name }}"><b></b>
                        <div class="mod-input-close-icon"></div>
                     </div>
                  </div>
               </div>
               <div class="edit-profile-item">
                  <h3 class="edit-profile-item-title">
                  <span>Địa chỉ email</span>  
                  <div class="mod-input floating  edit-profile-item-value"><input type="text" name="email" placeholder="Email"  value="{{ \Auth::user()->email }}"></div>
               </div>
               <div class="edit-profile-item">
                  <h3 class="edit-profile-item-title">
                  <span>Số điện thoại</span> 
                  <div class="mod-input floating  edit-profile-item-value"><input type="text" name="phone" placeholder="Số điện thoại"  value="{{ \Auth::user()->phone }}"></div>
               </div>
               
            </div> 
         </div>
      </div>
   </div>
</div>
</div>
</div>
    @stop