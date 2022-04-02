
@extends('layout.user')
@section('profile')
 
<div class="lzd-playground-right">
   <div class="breadcrumb">
      <a class="first " href="#">Quản lý tài khoản</a>
      <b>{{ session('status')}}</b>
   </div>
   <div id="cover" class="container" style="background: #eff0f">
      <div id="cover" class="container" style="background: #eff0f">
         <div class="dashboard">
            <div class="dashboard-profile">
               <div class="dashboard-mod-title">Thông tin cá nhân<span>|</span>
                  <a href="{{ route('get.user.edit') }}">Chỉnh sửa</a>
               </div>
               <div class="dashboard-info">
                  <div class="dashboard-info-item">{{ \Auth::user()->name}}</div>
                  <div class="dashboard-info-item" >{{ \Auth::user()->gmail }}</div>
                  <div class="dashboard-info-item last">
                  </div>
               </div>
            </div>
            <div class="dashboard-address">
               <div class="dashboard-address-item shipping">
                  <div class="dashboard-mod-title">Sổ địa chỉ <span>|</span> 
                     <a href="{{ route('get.user.address') }}" >Chỉnh sửa</a>
                  </div>
                  <div class="dashboard-address-default">Địa chỉ nhận hàng mặc định</div>
                  @if(isset(\Auth::user()->location))
                  <div class="dashboard-address-username">{{ \Auth::user()->user}}</div>
                  <div class="dashboard-address-detail">{{ \Auth::user()->location }}</div>
                  <div class="dashboard-address-detail">{{ \Auth::user()->address}}</div>
                  <div class="dashboard-address-phone">{{ isset(\Auth::user()->address)? \Auth::user()->phone: ""}}</div>
                  @else
                  <img src="{{ asset('view/img/location.jpg')}}" style="width:60px ">
                  @endif
               </div>
               <div class="dashboard-address-item billing">
                  <div class="dashboard-mod-title">Sổ địa chỉ <span>|</span> <a  href="/address#/book">Chỉnh sửa</a></div>
                  <div class="dashboard-address-default">Địa chỉ thanh toán mặc định</div>
                  <div class="dashboard-address-username">{{ \Auth::user()->user}}</div>
                  <div class="dashboard-address-detail">{{ \Auth::user()->location }}</div>
                  <div class="dashboard-address-detail">{{ \Auth::user()->address}}</div>
                  <div class="dashboard-address-phone">{{ \Auth::user()->phone}}</div>
               </div>
            </div>
         </div>
         <div class="recent-orders">
            <div class="recent-orders-hd" >Đơn hàng gần đây</div>
            <div class="next-table only-bottom-border">
               <div class="next-table-inner">
                  <div class="next-table-header">
                     <div class="next-table-header-inner">
                        <table>
                           <colgroup>
                              <col style="width: 20%;">
                              <col style="width: 20%;">
                              <col style="width: 30%;">
                              <col style="width: 20%;">
                              <col style="width: 15%;">
                           </colgroup>
                           <tbody>
                              <tr>
                                 <th rowspan="1" class="next-table-header-node first">
                                    <div class="next-table-cell-wrapper">Đơn hàng số #</div>
                                 </th>
                                 <th rowspan="1" class="next-table-header-node">
                                    <div class="next-table-cell-wrapper">Ngày đặt hàng</div>
                                 </th>
                                 <th rowspan="1" class="next-table-header-node">
                                    <div class="next-table-cell-wrapper">Sản phẩm</div>
                                 </th>
                                 <th rowspan="1" class="next-table-header-node" style="text-align: right;">
                                    <div class="next-table-cell-wrapper">Tổng cộng</div>
                                 </th>
                                 <th rowspan="1" class="next-table-header-node last" style="text-align: right;">
                                    <div class="next-table-cell-wrapper"></div>
                                 </th>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="next-table-body">
                     <table>
                        <colgroup>
                           <col style="width: 20%;">
                           <col style="width: 20%;">
                           <col style="width: 30%;">
                           <col style="width: 20%;">
                           <col style="width: 15%;">
                        </colgroup>
                        <tbody>
                           <tr class="next-table-row last first">
                              <td class="next-table-cell first">
                                 <div class="next-table-cell-wrapper">256012377261185</div>
                              </td>
                              <td class="next-table-cell">
                                 <div class="next-table-cell-wrapper">09/09/2020</div>
                              </td>
                              <td class="next-table-cell">
                                 <div class="next-table-cell-wrapper">
                                    <div>
                                       <div class="recent-item"><img src="https://my-live-02.slatic.net/p/af742c5e5cded7c69d4004e59b93b29d.jpg" title="Tai Nghe Bluetooth Không Dây Mini I9s, Tai Nghe Nhét Tai Stereo Có Hộp Sạc Cho iPhone Android Huawei Xiaomi Samsung Tất Cả Điện Thoại Thông Minh"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="next-table-cell" style="text-align: right;">
                                 <div class="next-table-cell-wrapper">₫ 132.200</div>
                              </td>
                              <td class="next-table-cell last" style="text-align: right;">
                                 <div class="next-table-cell-wrapper"><a href="https://my.lazada.vn/customer/order/view/?tradeOrderId=256012377261185" class="manage-order">QUẢN LÝ</a></div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</html>
 @stop