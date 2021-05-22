   
 
<div class="mod-reviews">
<div class="item">
   <div class="top">
      <div class="container-star starCtn left" style="width: 83.125px; height: 16.625px;">
         @for($i =1;$i<=$rating->r_number;$i++ )
         <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png">
         @endfor
         @for($j=5;$j>$rating->r_number;$j--)
         <img class="star" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png">
         @endfor
      </div>
      <span class="title right">{{ $rating->created_at->diffForHumans($now) }}</span>
   </div> 
   <div class="middle"><span>bởi {{ $rating->user->name}}</span> 
      <img class="verifyImg" width="15" height="16" src="//laz-img-cdn.alicdn.com/tfs/TB1bOqBeb_I8KJjy1XaXXbsxpXa-30-32.png"><span class="verify">Chứng nhận đã mua hàng</span> 
   </div>
   <div class="item-content">
      <div class="content">{{ $rating->r_content}}</div>
      @if(isset($product->pro_avatar))
      <img src="{{ pare_url_file($product->pro_avatar) }}" height="70px">
      @endif
      <div class="bottom"><span class="left"><img src="{{ asset('view/img/like.png') }}" style="width:13px"><span>0</span></span><span class="right"><span class="oper-wrap"><img src="{{ asset('view/img/more.png') }}" style="width: 15px;"> </span></span> </div>
      <div class="dialogs"></div>
   </div> 
</div>