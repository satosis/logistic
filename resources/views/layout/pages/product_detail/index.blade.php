@include('layout.component.header') 
<style>li{list-style:none}.cursor{cursor:pointer}.btn-primary{color:#fff;background-color:rgb(21 147 255 / 56%);border-color:#2e6da4}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.red{color:red}.fixed-width-full{line-height:1.15;font-size:12px;width:77%;font-family:Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,sans-serif!important;visibility:visible;margin:0 auto;padding:0;background-color:#fff;flex-basis:100%;margin-top:12px}.pdp-mod-section-title.outer-title{padding-left:24px;padding-right:24px;width:100%;height:52px;line-height:52px;background:#fafafa}.pdp-mod-section-title{font-weight:500;font-family:Roboto-Medium;font-size:16px;line-height:19px;color:#212121;letter-spacing:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.pdp-mod-review .mod-rating{padding:20px 24px}.pdp-mod-review .mod-rating .content{margin-top:18px}.pdp-mod-review .mod-rating .content:after,.pdp-mod-review .mod-rating .content:before{content:"";display:table}.pdp-mod-review .mod-rating .left{float:left}.pdp-mod-review .mod-rating .left:after,.pdp-mod-review .mod-rating .left:before{content:"";display:table}.pdp-mod-review .mod-rating .summary{float:left;width:145px;margin-right:90px}.pdp-mod-review .mod-rating .score{color:#212121}.pdp-mod-review .mod-rating .score-average{font-size:48px}.pdp-mod-review .mod-rating .score-max{font-size:32px;color:#9e9e9e;text-align:center;line-height:40px}.pdp-mod-review .mod-rating .average{margin-top:7px}.pdp-mod-review .mod-rating .count{margin-top:9px;color:#757575}.pdp-mod-review .mod-rating .detail{float:left}ul{list-style:none}.pdp-mod-review .mod-rating .detail li{margin-bottom:8px;color:#757575;font-size:10px}.pdp-mod-review .mod-rating .detail li .progress-wrap{margin-left:17px;margin-right:12px}.pdp-review-progress{display:inline-block;position:relative;width:138px;height:12px}.container-star{display:inline-flex}.star{display:inline-block;width:15.96px;height:15.96px}.pdp-review-progress .bg{background:#eff0f5}.pdp-review-progress .bar{position:absolute;left:0;top:0;width:100%;height:100%}.pdp-review-progress .fg{background:#faca51}.pdp-mod-review .mod-rating .detail li .percent{font-size:12px;color:#212121}.pdp-mod-review .mod-rating .left:after{clear:both}.pdp-mod-review .mod-rating .content:after{clear:both}.pdp-mod-review .mod-rating .content:after,.pdp-mod-review .mod-rating .content:before{content:"";display:table}.pdp-mod-filterSort{height:44px;padding-left:24px;border-top:1px solid #eff0f5;border-bottom:1px solid #eff0f5}.pdp-mod-filterSort .title{display:inline-block;height:44px;line-height:44px;font-size:14px;color:#212121}.pdp-mod-filterSort .oper{float:right;display:inline-block;padding:0 12px;height:44px;line-height:44px;border-left:1px solid #eff0f5;font-size:13px;color:#757575;cursor:pointer}.pdp-mod-filterSort .oper .oper-icon{font-size:20px;margin-right:5px;position:relative;top:2px}.lazada{font-family:"lazada"!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.pdp-mod-filterSort .oper .condition{color:#212121;margin-left:5px}.pdp-mod-review .mod-reviews .top:after,.pdp-mod-review .mod-reviews .top:before{content:"";display:table}.pdp-mod-review .mod-reviews .starCtn{margin-right:6px}.pdp-mod-review .mod-reviews .left{float:left}.pdp-mod-review .mod-reviews .title{font-size:12px;display:inline-block;overflow:hidden;word-break:break-word;color:#757575;float:right}.pdp-mod-review .mod-reviews .top:after{clear:both}.pdp-mod-review .mod-reviews .top:after,.pdp-mod-review .mod-reviews .top:before{content:"";display:table}.pdp-mod-review .mod-reviews .item{padding:17px 21px;color:gray;font-size:12px;border-bottom:1px solid #eff0f5}.pdp-mod-review .mod-reviews .top:after{clear:both}.pdp-mod-review .mod-reviews .top:after,.pdp-mod-review .mod-reviews .top:before{content:"";display:table}.pdp-mod-review .mod-reviews .middle{margin:5px 0 15px}.pdp-mod-review .mod-reviews .verifyImg{margin-left:8px;margin-right:3px;vertical-align:sub}.pdp-mod-review .mod-reviews .verify{color:#4caf50}.pdp-mod-review .mod-reviews .content{color:#212121;font-size:14px;white-space:pre-wrap;word-break:break-word}.review-image{padding-top:16px;padding-bottom:8px}.review-image__list{display:flex;margin-left:-2px}.review-image__item{position:relative;cursor:pointer;border:2px solid transparent;transition:all .3s cubic-bezier(.46,.03,.52,.96);display:block;width:auto;height:auto;text-align:initial}.pdp-common-image:before{display:inline-block;content:"";width:0;height:100%;vertical-align:middle}.review-image__item .image{width:94px;height:94px;background-position:50%;background-repeat:no-repeat;background-size:contain;background-color:#eee}.pdp-common-image .image{display:inline-block;width:auto;height:auto;max-width:100%;max-height:100%;vertical-align:middle}.pdp-mod-review .mod-reviews .skuInfo{font-size:12px;margin-top:8px}.seller-reply-wrapper{position:relative;background-color:#f8f8f8;padding:15px 15px 15px 48px;margin-top:20px}.seller-reply-wrapper:before{content:" ";position:absolute;top:-15px;left:30px;width:0;height:0;border-left:8px solid transparent;border-right:8px solid transparent;border-bottom:16px solid #f8f8f8}.pdp-mod-review .mod-reviews .item-content--seller-reply .item-title{color:#ff330c}.pdp-mod-review .mod-reviews .item-title{font-size:12px;color:#6a6a6a;line-height:16px;margin-bottom:8px;display:inline-block}.seller-reply-badge{width:20px;height:20px;margin-right:8px;display:inline-block;vertical-align:bottom}.pdp-mod-review .mod-reviews .content{color:#212121;font-size:14px;white-space:pre-wrap;word-break:break-word}.pdp-mod-review .mod-reviews .bottom{margin-top:8px}.pdp-mod-review .mod-reviews .bottom:after,.pdp-mod-review .mod-reviews .bottom:before{content:"";display:table}.pdp-mod-review .mod-reviews .bottom .left{cursor:pointer}.pdp-mod-review .mod-reviews .bottom .like-icon{color:#bababa;margin-right:7px}.pdp-mod-review .mod-reviews .right{float:right}.oper-wrap{cursor:pointer}.pdp-mod-qna{overflow:hidden;padding:0 24px 18px;background-color:#fff}.qna-ask-box-container{margin:20px 0}.qna-ask-box{position:relative}.qna-ask-box.folded .qna-ask-input{height:40px;line-height:40px;border-width:1px;border-bottom-left-radius:3px;border-top-left-radius:3px}.qna-ask-box .qna-ask-input{display:block;width:100%;border-width:0 0 1px;border-bottom-color:#f1f1f1}.next-input.next-input-single{border-color:#dadada}.next-input-medium{border-radius:0}.qna-ask-box input[placeholder]{color:#9e9e9e}.next-input-medium input{border-radius:0}.next-input-medium input{height:38px;line-height:38px;margin:0;padding:0 8px;font-size:20px}.next-input input,.next-input textarea{width:100%;border:0;outline:0;padding:0;font-weight:400;vertical-align:baseline;background-color:transparent}.next-input input{height:100%}.next-input,.next-input *,.next-input :after,.next-input :before{box-sizing:border-box}.qna-ask-box.folded .qna-ask-btn{position:absolute;top:0;right:0;border-bottom-left-radius:0;border-top-left-radius:0}.qna-ask-box .qna-ask-btn{padding:0 32px;height:40px;line-height:40px}.next-btn-medium{margin:0;height:40px;padding:0 24px;font-size:12px;line-height:38px;border-width:1px}.next-btn-primary,.next-btn-primary.visited,.next-btn-primary:link,.next-btn-primary:visited{color:#fff}.next-btn-primary{border-style:solid;background-color:#f57224;border-color:transparent}.next-btn,.next-btn:active,.next-btn:focus{outline:0}.qna-empty-icon.lazada-icon{display:block;margin:30px auto 10px;text-align:center;font-size:64px;color:#dadada}.qna-empty-text{text-align:center;color:#757575;font-size:14px}.qna-section-title{margin-top:15px;padding-bottom:8px;font-size:15px;color:#212121;border-bottom:1px solid #eff0f5}.qna-item-group{padding-left:48px;margin:25px 0}.seller-container .seller-name .seller-im-wrapper .seller-im-content{color:#25a5d8}.qna-icon-q{background:green;padding:5px;border-radius:50%;color:white}.qna-icon{position:absolute;margin-left:-48px;font-size:24px}.qna-meta{margin-top:5px;color:#9e9e9e}.opacity{opacity:.2}.r-active{opacity:1;color:yellow}.review_text{display:inline-block;margin-left:10px;position:relative;background:#52b858;color:#fff;padding:8px 10px 17px 10px;box-sizing:border-box;font-size:12px;border-radius:2px}.review_text:after{right:100%;top:50%;content:" ";height:0;width:0;position:absolute;pointer-events:none;border:6px solid rgba(82,184,88,0);border-right-color:#52b858;margin-top:-6px}.pagination{display:flex;font-size:130%;float:right}.page-item{padding:10px;margin-left:5px;cursor:pointer;background-color:#75757575}.pagination .active{border-color:#16849b;background:#1a9cb7;color:white}.disabledd{background-color:#848080;cursor:no-drop;color:white}.oper{float:right;display:inline-block;padding:0 12px;height:44px;line-height:44px;border-left:1px solid #eff0f5;font-size:13px;color:#757575;cursor:pointer}.oper .oper-icon{font-size:20px;margin-right:5px;position:relative;top:2px}.oper:hover>.next-menu{display:block}.next-menu{display:none;border:1px solid #eff0f5;border-radius:2px;box-shadow:1px 1px 4px 0 rgba(0,0,0,.25);font-size:14px;line-height:28px;padding:12px 0;min-width:100px;background:#fff}.next-menu ul{list-style:none;margin:0;padding:0}.next-menu-content li{padding:0 20px;position:relative;cursor:pointer;white-space:nowrap;transition:background .2s ease}.next-menu-content li:hover{background-color:#75757575}.next-menu-content .active{cursor:no-drop;opacity:.5}.expandInDown{animation-name:expandInDown;animation-iteration-count:1;animation-duration:.3s;animation-delay:0s;animation-timing-function:cubic-bezier(.23,1,.32,1);animation-fill-mode:both;backface-visibility:hidden}@keyframes expandInDown{0%{-ms-filter:"alpha(opacity=0)";-ms-transform-origin:left top 0;transform-origin:left top 0}100%{-ms-filter:"alpha(opacity=100)";-ms-transform-origin:left top 0;transform-origin:left top 0}}
legend{
   padding:15px;
   font-size:24px;
} 
</style>
<title>{{ $product->pro_name}}</title>
<div id="product">
   <div class="wrp">
      <div class="nameCate lsh">
         <a href="javascript://" class="name">{{ $product->pro_name}} </a> 
      </div> 
      <div class="detailPro">
         <div class="top">
            <div class="left">
               <div class="imgSmall">
                  <div class="img">
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img src="{{ pare_url_file($product->pro_avatar) }}"/>
                        </a>
                     </div>
                  </div>
                  <div class="img">
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img src="https://www.dangquangwatch.vn/upload/img_small/331971811_Untitled-7.jpg"/>
                        </a>
                     </div>
                  </div>
                  <div class="img">
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img src="https://www.dangquangwatch.vn/upload/img_small/281480432_Untitled-63.jpg"/>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="imgLarge">
                  <div class="img">
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img src="{{ pare_url_file($product->pro_avatar) }}" />
                        </a>
                     </div>
                  </div>
                  <div class="img"> 
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img src="https://www.dangquangwatch.vn/upload/img_big/331971811_Untitled-7.jpg" />
                        </a>
                     </div>
                  </div>
                  <div class="img">
                     <div class="wImage">
                        <a href="javascript://"  class="image">
                        <img s="https://www.dangquangwatch.vn/upload/img_big/281480432_Untitled-63.jpg" />
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="right">
               <h1  style="position:relative"><a href="javascript://"  class="namePro">{{ $product->pro_name}}</a> <i class="fa fa-eye"></i>&nbsp; {{ $product->pro_view }}
                  <a href="{{ route('ajax_get.user.favourite', $product->id) }}" class=" {{ !\Auth::id() ? 'js-login' :''}} js-add-favourite"><i class="{{ !$user_favourite ?'far fa-heart' : 'fa fa-heart red' }}"></i></a>&nbsp;<div class="favourite" style="position: absolute;bottom: 0;margin-left: 60px;"> {{ $product->pro_favourite }}</div>
               </h1>
               <div class="price">
                  <div class="price1">
                     <span class="text">Giá niêm yết </span>                                
                     <span class="numb cc4161c">{{ number_format($product->pro_price,0,',','.')}}đ</span>
                  </div>
                  <div style="color: #3498db;">
                     <span><i>Miễn phí vận chuyển! Xuất hóa đơn VAT</i></span>
                  </div>
               </div>
               <h3 class="descript">
                  <div class="item">
                     <span class="text">Đường kính mặt</span>
                     <span class="num">27mm</span>
                  </div>
                  <div class="item">
                     <span class="text">Độ chịu nước</span>
                     <span class="num">3ATM</span>
                  </div>
                  <div class="item">
                     <span class="text">Chất liệu mặt</span>
                     <span class="num">Kính sapphire</span>
                  </div>
                  <div class="item">
                     <span class="text">Năng lượng sử dụng</span>
                     <span class="num">Quartz/Pin </span>
                  </div>
               </h3>
               <div class="hotline">
                  <span>Gọi đặt mua: </span>
                  <a href="tel:18006005" ><span class="icon"><i class="fas fa-phone"></i></span> 1800.6005</a>
                  <span>(8:30 - 21:30)</span>
               </div>
               <div class="btnCart">
                  <a class="muangay {{ !\Auth::id() ? 'js-login' :''}}" href="{{ route('get.shopping.add' ,$product->id) }}">
                  <span>Mua ngay</span>
                  <span>Giao hàng miễn phí - Thanh toán tại nhà</span>
                  </a>
                  <a href="javascript://"  onclick="add_cart_detail('11590',1);" class="muatragop">
                  <span>Trả góp 0% dễ dàng qua thẻ</span>
                  <span>Visa, Master, JCB</span>
                  </a>
               </div>  
                  <legend>Từ khóa</legend>
                  <p><i class="fa fa-tag"></i>
                  @php 
                  $tags=explode(",",$product->keywordseo)
                  @endphp
                  @if(count($tags))
                  @foreach($tags as $tag)
                     <a href="javascript:;" style=" color: #00d4c0 !important;font-size:20px"># {{$tag}}</a>
                  @endforeach
                  @endif
                  </p> 
            </div>
         </div>
         <div class="bot">
            <div class="detail">
               <div class="otherPro slideRes">
                  <h3 class="title">Có thể bạn sẽ thích</h3>
                  <div class="group">
                     @foreach($productSuggest as $productList)
                     @include('layout.pages.product_detail.product_relate',['product'=>$productList])
                     @endforeach
                  </div>
               </div> 
               <div class="dn dbTablet">
                  <div class="thongsokythuat">
                     <div class="titleR">Thông số kỹ thuật</div>
                     <div class="group">
                        <div class="item">
                           <p class="text1">Đường kính mặt</p>
                           <p class="text2"><a href="javarscript://" >27mm</a></p>
                        </div>
                        <div class="item">
                           <p class="text1">Chống nước</p>
                           <p class="text2"><a href="javarscript://" >3ATM</a></p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu mặt</p>
                           <p class="text2">Kính sapphire</p>
                        </div>
                        <div class="item">
                           <p class="text1">Năng lượng sử dụng</p>
                           <p class="text2">Quartz/Pin </p>
                        </div>
                        <div class="item">
                           <p class="text1">Size dây</p>
                           <p class="text2">12mm</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu dây</p>
                           <p class="text2">Hợp kim mạ PVD</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu vỏ</p>
                           <p class="text2">Hợp kim mạ PVD , đính đá swarovsky</p>
                        </div>
                        <div class="item">
                           <p class="text1">Kiểu dáng</p>
                           <p class="text2">Nữ</p>
                        </div>
                        <div class="item">
                           <p class="text1">Xuất xứ</p>
                           <p class="text2">China</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chế độ bảo hành</p>
                           <p class="text2">Bảo hành quốc tế <b>10</b> năm</p>
                        </div>
                     </div>
                  </div>
                  <div class="tuvanbanhang">
                     <div class="titleR">Tư vấn bán hàng</div>
                     <div class="group">
                        <a href="tel:0867515555"  class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        086.751.5555
                        </span>
                        </a>
                        <a href="tel:0865059090"   class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        086.505.9090
                        </span>
                        </a>
                        <a href="tel:0938669090"  class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        093.866.9090
                        </span>
                        </a>
                        <a href="tel:0986681189"  class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        098.668.1189
                        </span>
                        </a>
                        <a href="tel:0985681189"  class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        098.568.1189
                        </span>
                        </a>
                        <a href="tel:18006005"  class="item">
                        <img src="/view/css/icon/sale_phone.png" class="lazy" src="/view/lazy.jpg"/>
                        <span class="text">
                        1800.6005
                        </span>
                        </a>
                     </div>
                  </div>
                  <div class="box_policy">
                     <div class="fs14">
                        <img class="mr-1" src="/view/css/icon/box.png" height="17">                  
                        Sản phẩm Fullbox:                                   
                     </div>
                     <div style="display: flex;padding-top: 5px;font-style: italic;">    
                        <a class="name" href="javascript://" >       <span>                  
                        Hộp đựng, thẻ bảo hành quốc tế, thẻ khách hàng thân thiết, khăn lau (đối với kính mắt)</span>
                        </a> 
                     </div>
                     <div class="pt10 fs14"> 
                        <img class="mr-1" src="/view/css/icon/bh10.png" height="17">
                        <a class="name" href="/chinh-sach-chung/2/1.-Chinh-sach-bao-hanh.html" >
                        Chế độ bảo hành 10 năm <span>(Xem chi tiết)</span>
                        </a>
                     </div>
                     <div class="pt10 fsfs1416"> 
                        <img class="mr-1" src="/view/css/icon/doi.png" height="17">
                        <a class="name" href="javascript://" >
                        30 ngày đổi sản phẩm miễn phí.
                        </a>
                     </div>
                     <div class="pt10 fs14"> 
                        <img class="mr-1" src="/view/css/icon/ship.png" height="17">
                        <a class="name" href="javascript://"  >
                        Giao miễn phí, nhận hàng kiểm tra trước khi thanh toán
                        </a>
                     </div>
                     <div class="pt10 fs14"> 
                        <img class="mr-1" src="/view/css/icon/vat.png" height="17">
                        <a class="name" href="javascript://"  >
                        Chính hãng 100% - xuất hoá đơn VAT
                        </a>
                     </div>
                  </div>
               </div>
               <div class="splienquan">
                  <div class="item">
                     <div class="left">
                        <div class="wImage">
                           <a href="javascript://"  class="image">
                           <img src="{{ pare_url_file($product->pro_avatar) }}" class="lazy" src="/view/lazy.jpg"/>
                           </a>
                        </div>
                        <div class="info">
                           <a href="javascript://"  class="name">
                           {{ $product->pro_name}}
                           </a>
                           <p class="price">{{ number_format($product->pro_price,0,',','.')}}đ  </p>
                        </div>
                     </div>
                     <div class="lstBtn">
                        <a href="{{ route('get.shopping.add' ,$product->id) }}"class="  {{ !\Auth::id() ? 'js-login' :''}} buttn muangay" >Mua ngay</a>
                        <a href="javascript://"  class="buttn">Mua trả góp 0%</a>                                   
                     </div>
                  </div>
               </div>
            </div>
            <div class="detailRight">
               <div class="dntablet">
                  <div class="thongsokythuat">
                     <div class="titleR">Thông số kỹ thuật</div>
                     <div class="group">
                        <div class="item">
                           <p class="text1">Đường kính mặt</p>
                           <p class="text2"><a href="javarscript://" >27mm</a></p>
                        </div>
                        <div class="item">
                           <p class="text1">Chống nước</p>
                           <p class="text2"><a href="javarscript://" >3ATM</a></p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu mặt</p>
                           <p class="text2">Kính sapphire</p>
                        </div>
                        <div class="item">
                           <p class="text1">Năng lượng sử dụng</p>
                           <p class="text2">Quartz/Pin </p>
                        </div>
                        <div class="item">
                           <p class="text1">Size dây</p>
                           <p class="text2">12mm</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu dây</p>
                           <p class="text2">Hợp kim mạ PVD</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chất liệu vỏ</p>
                           <p class="text2">Hợp kim mạ PVD , đính đá swarovsky</p>
                        </div>
                        <div class="item">
                           <p class="text1">Kiểu dáng</p>
                           <p class="text2">Nữ</p>
                        </div>
                        <div class="item">
                           <p class="text1">Xuất xứ</p>
                           <p class="text2">China</p>
                        </div>
                        <div class="item">
                           <p class="text1">Chế độ bảo hành</p>
                           <p class="text2">Bảo hành quốc tế <b>10</b> năm</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div   id="block-ud2glzu2WR1" class="pdp-block fixed-width-full  block-margin-top background-2">
   <div id="module_product_review" class="pdp-block module">
      <div class="pdp-mod-review">
         <div>
            <div class="mod-title">
               <h2 class="pdp-mod-section-title outer-title">Đánh giá và nhận xét của {{ $product->pro_name}}</h2>
            </div>
            @php
            $age=0;
            if($product->pro_review_total)
            $age = $product->pro_review_star /$product->pro_review_total;
            @endphp
            <div class="mod-rating">
               <div class="content">
                  <div class="left">
                     <div class="summary">
                        <div class="score" ><span class="score-average">{{round($age,2)}}</span><span class="score-max">/5</span></div>
                        <div class="average">
                           <div class="container-star " style="width: 166.25px; height: 33.25px;">
            @if($age==0)
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
          @else
            @for($i=1;$i<=floor($age);$i++)

            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png" style="width: 33.25px; height: 33.25px;">

            @endfor 

            @if(floor($age) < round($age,2))
            <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB16gwRdOqAXuNjy1XdXXaYcVXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
            @for($i=$age+1;$i<=5;$i++)
               <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
               @endfor
           
            @else
               @for($i=$age;$i<=5;$i++)
               <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"  style="width: 33.25px; height: 33.25px;">
               @endfor
            @endif
            @endif
                           </div>
                        </div>
                        <div class="count"> {{$product->pro_review_total}} đánh giá</div>
                     </div>
                     @foreach($ratingDefault as $key =>$item)
                     @php
                     $ageItem=0;
                     if($product->pro_review_total >0)
                     $ageItem = round(($item['count_number'] / $product->pro_review_total) *100,2);
                     @endphp
                     <div class="detail">
                        <ul>
                           <li>
                              <div class="container-star progress-title" style="width: 79.8px; height: 15.96px;">
                                  @for($i =1;$i<=$key;$i++)
                                 <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"> 
                                 @endfor
                                 @for($j=5;$j>$key;$j--)
                                 <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png">
                                 @endfor 
                               </div>
                              <span class="progress-wrap">
                                 <div class="pdp-review-progress">
                                    <div class="bar bg"></div>
                                    <div class="bar fg" style="width: {{$ageItem}}%;"></div>
                                 </div>
                              </span>
                              <span class="percent"> {{ $item['count_number'] }}</span>
                           </li>
                        </ul>
                     </div>
                     @endforeach 
                  </div>
               </div>
            </div>
         </div>
         <div>
            <div class="pdp-mod-filterSort">
               <span class="title">Nhận xét về sản phẩm</span>
               <div class="oper">
                  <span>Lọc:</span>
                  @php
                  $number='Tất cả';
                  for($i=5;$i>=1;$i--)
                  if(Request::get('s') == $i){
                  $number =$i;
                  break;
                  }  
                  @endphp
                  <span class="condition">{{ $number}} Sao</span>
                  <div class="next-menu next-overlay-inner expandInDown ">
                     <ul class="next-menu-content" style="color: black;">
                        <li class="{{ Request::get('s') ==6 ?'active' : '' }}"  ><a href="{{ route('get.product.detail',$product->pro_slug.'-'.$product->id )}}">Tất cả Sao</a></li>
                        @for($i=5;$i>=1;$i--)
                        <li class="{{ Request::get('s') == $i ?'active' : '' }}" ><a href="{{ request()->fullUrlWithQuery(['s'=>$i]) }}">{{$i}} Sao</a></li>
                        @endfor
                     </ul>
                  </div>
               </div>
               <div class="oper"><span class="lazada lazada-is-sort lazada-icon oper-icon"></span><span>Sắp xếp:</span><span class="condition">Liên quan</span></div>
            </div>
         </div>
         <div>
            <div class="review_list">
               @foreach($ratings as $value =>$item)
               @include('layout.pages.product_detail.ratings',['rating'=>$item])
               
               @endforeach     
            <div class="pagination-link">
               {!! $ratings->appends($query ?? [])->links() !!}
            </div>
            </div>   
            
            <div id="block-review">
               <form action="{{ route('ajax_post.user.rating.add') }}" class="form-question" method="post">
                  @csrf
                  <div class="item">
                     <br><br>
                     @if(isset(\Auth::user()->id))
                     <div id="module_product_qna" class="pdp-block module">
                        <div class="mod-title">
                           <div class="pdp-mod-section-title outer-title">Phản hồi của bạn về sản phẩm này</div>
                           <br><br>
                           <div class="top">
                              <div class="container-star starCtn left" id="ratings" style="width: 223.125px; height: 16.625px;">
                                 @for ($i=1;$i<=5;$i++)
                                 <i class="fas fa-star opacity cursor" style="zoom:2" data-i={{$i}} ></i>
                                 @endfor
                                 <span id="review_text"></span>
                                 <input type="hidden" id="review_value"  name="review" value="5">
                                 <input type="hidden" id="product_id"  name="product_id" value="{{ $product->id }}">
                              </div>
                           </div>
                           <div class="pdp-mod-qna">
                              <div class="qna-ask-box-container">
                                 <div class="qna-ask-box folded">
                                    <span class="next-input next-input-single next-input-medium qna-ask-input"><input type="text" placeholder="Viết câu hỏi của bạn ở đây" value="" name="content" maxlength="300" height="100%"></span>
                                    <button type="submit"  class=" cursor next-btn next-btn-primary next-btn-medium qna-ask-btn js-process-view">ĐẶT CÂU HỎI</button>
                                 </div>
                              </div>
               </form>
               </div> 
               @if(!$rating)
               <div>
               <span class="lazada lazada-noReview lazada-icon qna-empty-icon"></span>
               <div class="qna-empty-text">Chưa có câu hỏi cho sản phẩm này.</div>
               <div class="qna-empty-text">Đặt câu hỏi cho nhà bán hàng và câu trả lời sẽ được hiển thị tại đây</div>
               </div>
               </div>  
               @else   
               <div class="qna-section-title">Câu hỏi của tôi    </div>
               <ul class="qna-list" >   
               <div class="review_list_personal"></div> 
               
               @foreach($rating as $value =>$item)
               @include('layout.pages.product_detail.personal_rating',['rating'=>$item]) 
               @endforeach
               {!! $rating->links() !!}@endif 
               <br>
               <br>
               <br> 
               </ul>
               @endif
               </div>  
               </div>  
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div></div></div>
</div>
</div></div></div>  
<div id="SupInfo">
   <div class="wrp">
      <div class="left">
         <div class="item">
            <p class="head">Hotline</p>
            <a href="tel:18006005" class="tel">
            <span class="icon"><i class="fas fa-phone"></i></span>
            <span class="text">1800.6005</span>
            </a>
         </div>
         <div class="item">
            <p class="head">Gọi đặt hàng</p>
            <a href="tel:0985681189" class="tel">
            <span class="icon"><i class="fas fa-phone"></i></span>
            <span class="text">098.568.1189</span>
            </a>
         </div>
      </div>
      <div class="right">
         <div class="mail">
            <p class="fs17 ttu mb10">Đăng ký nhận thông tin mới</p>
            <div id="frmMail">
               <input type="text" value="" placeholder="Nhập email của bạn tại đây" />
               <a href="javascript://"  class="btnRegis">Đăng ký</a>
            </div>
         </div>
         <div class="social">
            <p class="fs17 ttu mb10">Kết nối mạng xã hội</p>
            <ul>
               <li><a rel="nofollow" href="https://www.facebook.com/donghodangquang"   target="_blank"><i class="fab fa-facebook-f"></i></a></li>
               <li><a rel="nofollow" href="https://www.instagram.com/dangquang_official/"  target="_blank"><i class="fab fa-instagram"></i></a></li>
               <li><a rel="nofollow" href="https://www.youtube.com/dangquangtv"  target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
@include('layout.component.footer')
<script>
   $(function(){
        
     $('.js-add-favourite').click(function(event){
           event.preventDefault();
           let $this=$(this);
           let URL = $this.attr('href');
           if(URL){
               $.ajax({ 
                   headers:{
                       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                   },
                   method:"POST",
                   url:URL
               }).done(function(result){ 
                  if(result.status==1){
                  $('.js-add-favourite i').removeClass('far');
                  $('.js-add-favourite i').removeClass('fa-heart');
                  $('.js-add-favourite i').addClass('fa');
                  $('.js-add-favourite i').addClass('fa-heart');
                  $('.js-add-favourite i').addClass('red');
                  }
                  else if(result.status ==2){
                  $('.js-add-favourite i').removeClass('fa');
                  $('.js-add-favourite i').removeClass('fa-heart');
                  $('.js-add-favourite i').removeClass('red');
                  $('.js-add-favourite i').addClass('far');
                  $('.js-add-favourite i').addClass('fa-heart');

                  }
                  $this.parents('h1').find('.favourite').text(result.count);
                   
               })
           }
       });
   
       let $item =$("#ratings i");
       let arrTextRating ={
           1 :"Rất tồi tệ",
           2 :"Tồi tệ",
           3 :"Tốt",
           4 :"Xuất sắc",
           5 :"Tuyệt vời"
       };
       $item.mouseover(function(){
           let $this =$(this);
           let $i =$this.attr('data-i');
           $("#review_value").val($i);
           $item.removeClass('r-active');
           $item.each(function (key,value){
             if(key+1 <= $i){
                 $(this).addClass('r-active');
             }
           }) 
           $("#review_text").addClass('review_text');
           $("#review_text").text(arrTextRating[$i]);
       });
       $(".js-process-view").click(function(event){
           event.preventDefault();
           let URL =$(this).parents('form').attr('action'); 
           $.ajax({ 
                   method:"POST",
                   headers:{
                       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                   },
                   url:URL,
                   data:$('.form-question').serialize()
               }).done(function(result){ 
                 $('.form-question')[0].reset(); 
                 console.log(result.html);
                 if(result.html){  
                     $(".review_list").prepend(result.html);
                     $(".review_list_personal").prepend(result.personal);
                 }
                 toastr.success(result.messages);
               })
       });
 
   
       $("body").on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            let URL =$(this).attr('href');
            var myurl = URL;
            var page=URL.split('page=')[1];
  
            getRatingList(page);
        });
      
       function getRatingList(page)
       {
            $.ajax({
                 type: "GET",
                 url: '?page='+ page
            })
            .success(function(results) { 
               $(".review_list_personal").html(results.html);
            });
       }
   })
</script>