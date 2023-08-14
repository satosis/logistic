<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Arr;

class Logistic extends Model
{
    protected $fillable = [
        'id', 'order_number', 'customer_name', 'recipient_address', 'shipping_address', 'shipping_date', 'delivery_date', 'status',
    ];
    protected $guarded=[''];
    protected $statusActive =[
        '1' =>[
            'class' => 'btn btn-default',
            'name'  => 'Tiếp nhận'
        ],
        '2' =>[
            'class' =>'btn btn-info',
            'name'  =>'Đang vận chuyển'
        ],
        '3' =>[
            'class' =>'btn btn-success',
            'name'  =>'Đã bàn giao'
        ],
        '-1' =>[
            'class' =>'btn btn-danger',
            'name'  =>'Đã hủy'
        ],
        '4' =>[
            'class' =>'btn btn-primary',
            'name'  =>'Người dùng đã xác nhận'
        ],
    ];
     public function getStatus()
    {
        return Arr::get($this->statusActive, $this->status,"[N\A]");
    }
}
