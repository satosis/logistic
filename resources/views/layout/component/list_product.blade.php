<div class="item">
    <div class="wImage">
        <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id)}}" class="image">
            <img data-src="{{ pare_url_file($list->pro_avatar) }}" alt="{{ $list->pro_name}}" class="lazy" src="/view/lazy.jpg"/>
        </a>  
</div>
<div class="info">
        <p>40mm | 5ATM | Sapphire</p>        
        <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id)}}" class="name">{{ $list->name}}</a>
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
    <div class="count">
<div class="bg" style="width: {{ rand(10,100)}}%"></div>
    <span class="text">Còn lại {{ $list->pro_amount}}</span>
</div>
</div>
</div>