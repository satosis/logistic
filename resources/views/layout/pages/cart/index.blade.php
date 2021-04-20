@include('layout.component.header')
<style>
.d-none{
   display:none;
}
.updatecart{
   background-color: rgb(239, 239, 239);
   padding:7px;
}
.position-relative{position:relative}
input:enabled:read-write:-webkit-any(:focus,:hover)::-webkit-inner-spin-button {display:none}
.js-increase{
    position: absolute;
    top: 0;cursor:pointer;
    font-size: 120%;
    margin-left: 20px;}
.js-decrease{ 
    position: absolute;
    top: 0;cursor:pointer;
    margin: 10px;
    font-size: 150%;
    margin-left: 23px;
}
</style>
<link rel="stylesheet" href="{{ asset('view/css/cart.css')  }}">
<div id="pageway" style="border-bottom: 5px solid #e5e5e5;">
   <div class="wrp">
      <ul>
         <li><a href="/" ><b>TRANG CHỦ</b></a></li>
         <li><a href="javascript://"  style="color: #288ad6"><b>GIỎ HÀNG</b></a></li>
      </ul>
   </div>
</div>
</div>
<div id="container">
   <div class="wrp">
      <!--<a href="http://bit.ly/37wPRl4" title="" class="image">
         <img data-src="/view/Pic/SALET4B.jpg" alt="" class="lazyload" width="100%">
         </a>-->
      <div id="product" class="cart">
         <div class="flex">
            <div class="left">
               <div class="cart_header" style="text-align: center;color: #288ad6;">THÔNG TIN GIỎ HÀNG</div>
               <form name="frm_cart" action="" method="post">
                  @csrf
         <div class="tableCart">
            <div class="row row1">
               <div class="col col1"></div>
               <div class="flex flex_1">
         <div class="col col2 dnmobile">Sản phẩm</div>
         <div class="flex flex_1 dnmobile">
      <div class="col col3">Giá</div>
      <div class="col col4">Số lượng</div>
      <div class="col col5">Thành tiền</div>
      <div class="col col6"></div>
         </div>
               </div>
            </div>
   @foreach($shopping as $key=> $cart)
      <nav>
      <div class="row row2">
         <div class="col col1">
            <div class="wImage">
               <a href="{{ route('get.product.detail',Str::slug($cart->name).'-'.$cart->id )}}"  class="image">
               <img src="{{ pare_url_file($cart->options->image)}}"/>
               </a>
            </div>
         </div>
         <div class="flex flex_1">
            <div class="col col2">
               <a href="{{ route('get.product.detail',Str::slug($cart->name).'-'.$cart->id )}}"  class="fHelveticaNeueB">{{ $cart->name}}
               </a>
            </div>
            <div class="col col3">
               <span class="fs16">
         <p><b>{{ number_format($cart->price,0,',','.') }}
         </b></p>
       @if($cart->options->sale)
         <p style="background: #F00;padding: 5px 5px;color: #FFF;border-radius: 25px;text-transform: uppercase;font-weight: bold;width: 80px;text-align: center;">- {{$cart->options->sale  }} %</p>
            </span>
       @endif
         </div>
         <div class="col col4">
            <span class="dn dibmobile pr4">Số lượng: </span>
      <div class="position-relative" >
         <input type="number" min="1" class="input_quantity" name="qty" value="{{ $cart->qty}}" id="qty"  />
         <p data-price="{{$cart->price}}" data-url="{{ route('ajax_get.shopping.update',$key) }}" data-id-product="{{$cart->id}}" >
            <span class="js-increase">+</span>
            <span class="js-decrease">-</span>
         </p>
      </div> 
      <!-- <input type="button" class="update_qty btn btn-danger fff d-none"  value="Cập nhật"/><br><br>    -->
      <!-- <a href="{{ route('ajax_get.shopping.update',$key) }}" data-id-product="{{$cart->id}}" class="updatecart" >Cập nhật</a>  -->
         </div>
            <div class="col col5">
      <span class="dn dibmobile pr4">Thành tiền: </span>
      <div class="fs16 fwb js-total-item">
                              {{ number_price($cart->price*$cart->qty ,$cart->options->sale)}}
      </div>
         </div>
         <div class="col col6">
      <a  href="{{ route('get.shopping.delete',$key) }}">
      <img src="{{ asset('view/img/delete.jpg') }}"  >
      </a>
         </div>
               </div>
            </div>
         </nav>
                     @endforeach                       						               
            <div class="row row3">
               <div class="lienhe">
         <p>Tổng giá trị đơn hàng: <b class="totalPrice" style="color: red;font-size: 18px;text-decoration:line-through;"> {{ \Cart::subtotal(0) }}</b> </p>
         <p style="color: #3498db;text-align: left;font-size: 18px;font-weight: bold;padding: 6px 0;">Bạn tiết kiệm được: <span id="paySave">0</span> VNĐ</p>
               </div>
               <div class="totalPrice">Thanh toán: <span class="payOrder">{{ \Cart::subtotal(0) }}</span> VNĐ </div>
            </div>
            <input type="hidden" name="hdntotal" id="hdntotal" value="46440000">
            
         </div>
         <div class="cb"></div>
         <div class="btnCartGroup tac" style="margin-top: 30px;">
            <a href="/sp/dong-ho-thuy-sy.html" class="btnCart"  style="background: #3498db;padding: 10px 15px;color: #FFF;border-radius: 25px;text-transform: uppercase;">Mua thêm sản phẩm khác <i class="fas fa-arrow-right"></i></a>
         </div>
               </form>
            </div>
            <div class="infoDatHang flex_1">
               <div class="group">
         <div class="c000 fSFUHelveticaCondensedBold ttu fs20 pb20" style="text-align: center;color: #288ad6;">THÔNG TIN LIÊN HỆ</div>
         <p class="fsti pb10 tac">Lưu ý: Các ô có dấu <span class="cRed">(*)</span> cần điền đầy đủ thông tin</p>
         <div class="form">
            <form class="from_cart_register" action="{{ route('post.shopping.pay') }}" method="post">
                        @csrf
               <div class="item">
         <p class="label">Họ và tên <span class="cRed">(*)</span></p>
         <input type="text" name="tst_name" value="{{ get_data_user('web','name') }}" id="tst_name" autocomplete="off" placeholder="Nhập họ tên" />
               </div>
               <div class="item">
         <p class="label">Điện thoại <span class="cRed">(*)</span></p>
         <input type="text" name="tst_phone" value="{{ get_data_user('web','phone') }}" id="tst_phone" autocomplete="off" placeholder="Nhập điện thoại" />
               </div>
               <div class="item">
         <p class="label">Địa chỉ <span class="cRed">(*)</span></p>
         <input type="text" name="tst_address" value="{{ get_data_user('web','address') }}" id="tst_address" autocomplete="off" placeholder="Nhập địa chỉ" />
               </div>
               <div class="item">
         <p class="label">Email</p>
         <input type="text" name="tst_email" value="{{ get_data_user('web','email') }}" />
               </div>
               <div class="item">
         <p class="label">Nội dung</p>
         <textarea style="min-height: 60px;" name="tst_note" cols="" rows="2"></textarea>
               </div>
               <div>
               </div>
               <div id="payLast" class="hide">
         <div>Thẻ <span id="cardName">member</span> được giảm thêm: <span id="discount">5%</span> </div>
         <div> Số tiền cần thanh toán: <span id="payMoney">44.118.000</span> VNĐ</div>
               </div>
               <div class="cb h10"></div>
               <div class="btnThanhToan">
         <button class="tac" name="tst_type" value="1" type="submit">
      <p class="ttu fHelveticaNeueB fs15">ĐẶT HÀNG THANH TOÁN SAU</p>
      <p>(Trả tiền khi nhận hàng tại nhà)</p>
         </button>
         <button class="tac" name="tst_type" value="2" type="submit">
      <p class="ttu fHelveticaNeueB fs15">Thanh toán online</p>
      <p>(Bằng thẻ ATM, Visa, Master)</p>
         </button>
               </div>
            </form>
         </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('layout.component.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(function(){   
   $('.updatecart').on('click',function(event){
   event.preventDefault();
   $this =$(this);
   let url=$this.attr('href');
   let qty = $("#qty").val();
   let idProduct = $this.attr('data-id-product');
   
   if(url){
      $.ajax({
         url: url,
         data: { 
            qty: qty,
            idProduct:idProduct
             }
         }).done(function( results ) {
            if(results.messages){
               toastr.warning(results.messages);
            }
            else{
               
          window.location.reload();
            }
  });
   }
})

   $('.js-increase').click(function(){  
      let $this     =$(this);
      let $input    =$this.parent().prev();
      let number    =parseInt($input.val());
      let price     =$this.parent().attr('data-price');  
      let URL       =$this.parent().attr('data-url');
       
      let IdProduct =$this.parent().attr('data-id-product');
      number=number+1;  
      
      $.ajax({
         url:URL,
         data :{
            qty:number,
            idProduct:IdProduct
         }
      }).done(function(results){ 
         if(typeof results.totalMoney !== "underfined"){ 
           
         $(".payOrder").text(results.totalMoney+"đ");
         $(".number").text(results.number);
         $this.parents('nav').find(".js-total-item").text(results.totalItem+"đ");
         }
         else{
            $input.val(number-1);
         }
         
         $input.val(number); 
      })
   })
   $('.js-decrease').click(function(){  
      let $this     =$(this);
      let $input    =$this.parent().prev();
      let number    =parseInt($input.val());
      let price     =$this.parent().attr('data-price');  
      let URL       =$this.parent().attr('data-url'); 
      if(number<=0) {
         toastr.warning("Số sản phẩm không được nhỏ hơn 0");
         return false;
      }
      let IdProduct =$this.parent().attr('data-id-product');
      number=number-1;  
      
      $.ajax({
         url:URL,
         data :{
            qty:number,
            idProduct:IdProduct
         }
      }).done(function(results){ 
         if(typeof results.totalMoney !== "underfined"){ 
           
         $input.val(number);
         $this.parents('nav').find(".js-total-item").text(results.totalItem+"đ");
         $(".payOrder").text(results.totalMoney+"đ"); 
         $(".number").text(results.number);
         }
         else{
            $input.val(number+1);
         } 
      })
   })
})

</script>

