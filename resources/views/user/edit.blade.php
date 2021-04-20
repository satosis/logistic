
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
               <div class="edit-profile-item-info"> <div class="mod-input mod-birthday-birthday mod-input-birthday"><label>Ngày sinh</label> 
                        </div>
                  <div class="mod-birthday">
                     <div class="mod-birthday-bd"> 
                        <span name="day" id="day" class="next-select large mod-fusion-select mod-birthday-day" tabindex="0">
                        <span class="next-select-inner">
                        <span class="next-select-placeholder">Ngày</span></span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span>
                        
                        <span name="month" id="month" class="next-select large mod-fusion-select mod-birthday-month" tabindex="0"> 
                           <span class="next-select-inner">
                           <span class="next-select-placeholder">Tháng</span></span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span>
                         
                        
                        <span name="year" id="year" class="next-select large mod-fusion-select mod-birthday-year" tabindex="0">
                        <span class="next-select-inner">
                        <span class="next-select-placeholder">Năm</span></span><i class="next-icon next-icon-arrow-down next-icon-medium next-select-arrow"></i></span>
                       
                     </div>
                     <span class="mod-birthday-error"></span>
                  </div>
               </div>
            </div>
            <div class="edit-profile-item">
               <h3 class="edit-profile-item-title">Giới tính</h3>
               <div class="edit-profile-item-info">
                  <div class="mod-gender">
                     <div class="mod-gender-hd">Giới tính</div>
                   <select name="gender" class="next-select large mod-fusion-select mod-gender-gender">
                   <option value="">Chọn</option>
                   <option value="male" {{ (\Auth::user()->gender =='male') ? "selected='selected'": '' }}>Nam</option>
                   <option value="female" {{ (\Auth::user()->gender =='female') ? "selected='selected'": ''  }}>Nữ</option>
                   </select>
                  </div>
               </div>
            </div>
            <div class="edit-profile-item">
               <h3 class="edit-profile-item-title">Mã số thuế</h3>
               <div class="edit-profile-item-info">
                  <div class="mod-input edit-profile-input-taxId mod-input-taxId"><input type="text" placeholder="Nhập mã số thuế của bạn" ><b></b>
                  </div>
                  <br><br> <button type="submit" class="next-btn next-btn-primary next-btn-large">LƯU THAY ĐỔI</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
    @stop