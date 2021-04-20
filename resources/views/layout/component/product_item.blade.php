@if(isset($product)) 
<div class="item">
                <div class="wImage">
                    <a href="{{ route('get.product.detail',$product->pro_slug.'-'.$product->id )}}"  class="image">
                        <img data-src="{{ pare_url_file($product->pro_avatar) }}" alt="Jacques Lemans" class="lazy" src="/view/lazy.jpg"/>
                    </a> 
                                                    
                                    </div>
                <div class="info">
                    <p>34mm | 10ATM</p>         
                   <a href="{{ route('get.product.detail',$product->pro_slug.'-'.$product->id )}}"  class="name">
                        <h3>{{ $product->pro_name}}</h3>
                    </a> 
                    <div  style="display:flex">
                      
                    @for($i=1;$i<=$product->pro_number;$i++)
                    <img style="width:15.96px;height:15.96px" src="//laz-img-cdn.alicdn.com/tfs/TB19ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"> 
                    @endfor
                    @for($j=$product->pro_number+1;$j<=5;$j++)

                    <img style="width:15.96px;height:15.96px" src="//laz-img-cdn.alicdn.com/tfs/TB18ZvEgfDH8KJjy1XcXXcpdXXa-64-64.png"> 
                    @endfor
                    </div>
                    <div class="price">
                    @if($product->pro_sale)
                    <p class="new">{{ number_format($product->pro_price - $product->pro_sale,0,',','.') }}đ</p>
                    <p class="old">{{ number_format($product->pro_price,0,',','.') }}đ</p>
                    @else
                    <p class="new">{{ number_format($product->pro_price,0,',','.') }}đ</p>
                    @endif
                        
                                            </div>
                    <div class="count">
                        <div class="bg" style="width: 31%"></div>
                        <span class="text">Còn lại {{$product->pro_amount}}</span>
                    </div>
                </div>
            </div>
@endif