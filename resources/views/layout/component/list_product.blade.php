<div class="item">
    <div class="wImage">
        <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id)}}" class="image">
            <img data-src="{{ pare_url_file($list->pro_avatar) }}" alt="{{ $list->pro_name}}" class="lazy" src="/view/lazy.jpg"/>
        </a>  
</div>
<div class="info">
        <p>40mm | 5ATM | Sapphire</p>        
        <a href="{{ route('get.product.detail',$list->pro_slug.'-'.$list->id)}}" class="name">ĐỒNG HỒ PHILIPPE AUGUSTE PA5001A - Nam</a>
        <div class="price">
            <p class="new">{{ number_price($list->pro_price,0) }} đ</p>
        </div>
    <div class="count">
<div class="bg" style="width: 25%"></div>
    <span class="text">Còn lại {{ $list->pro_number}}</span>
</div>
</div>
</div>