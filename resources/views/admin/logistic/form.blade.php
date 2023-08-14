<form class="from_cart_register" method="post">
    @csrf


    <div class="item">
        <p class="text-secondary">Số đơn hàng <span class="cRed">(*)</span></p>
        <input type="text" required class="form-control" name="order_number" value="{{$logistics->order_number }}" id="order_number" autocomplete="off"
            placeholder="Nhập số đơn hàng" />
    </div>
    <div class="item">
        <p class="text-secondary">Tên khách hàng <span class="cRed">(*)</span></p>
        <input type="text" required class="form-control" name="customer_name" value="{{$logistics->customer_name }}" id="customer_name" autocomplete="off"
            placeholder="Nhập tên khách hàng" />
    </div>
    <div class="item">
        <p class="text-secondary">Địa chỉ người nhận <span class="cRed">(*)</span></p>
        <input type="text" required class="form-control" name="recipient_address" value="{{$logistics->recipient_address }}" autocomplete="off"
            placeholder="Nhập địa chỉ người nhận" />
    </div>
    <div class="item">
        <p class="text-secondary">Địa chỉ giao hàng</p>
        <input type="text" required placeholder="Nhập địa chỉ giao hàng" class="form-control" name="shipping_address" value="{{$logistics->shipping_address }}" />
    </div>
    <div class="item">
        <p class="text-secondary">Ngày giao hàng</p>
        <input style="width:170px" type="date" required placeholder="Nhập ngày giao hàng" class="form-control" name="shipping_date" value="{{$logistics->shipping_date }}" />
    </div>
    <div class="item">
        <p class="text-secondary">Ngày giao hàng dự kiến</p>
        <input style="width:170px" type="date" required placeholder="Nhập ngày giao hàng dự kiến" class="form-control" name="delivery_date" value="{{$logistics->delivery_date }}" />
    </div><br>
    <button class="btn btn-success" type="submit">Lưu thông tin</button>
    <a class="btn btn-danger" href="{{ route('admin.logistic.index') }}">Quay lại</a>


</form>
