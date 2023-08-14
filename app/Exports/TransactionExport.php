<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class logisticExport implements FromCollection, WithHeadings
{
    private $logistics;

    public function __construct($logistics)
    {
        $this->logistics = $logistics;
    }

    public function collection()
    {
        $logistics = $this->logistics;
        $formatlogistic = [];
        foreach ($logistics as $key => $item) {

            $formatlogistic[] = [
                'id' => $item->id,
                'total' => $item->tst_total_money,
                'name' => $item->tst_name,
                'email' => $item->tst_email,
                'phone' => $item->tst_phone,
                'address' => $item->tst_address,
                'status' => $item->getStatus($item->status)['name'],
                'type' => $item->tst_user_id ? " Thành viên " : "Khách",
                'create' => $item->created_at
            ];
        }

        return collect($formatlogistic);
    }

    public function headings(): array
    {
        return [
            '#',
            'use_id',
            'Tổng tiền',
            'Tên khách hàng',
            'Email',
            'Số điện thoại',
            'Địa chỉ',
            'Note',
            'Trạng thái',
            'Thanh toán bằng',
            'Tạo lúc'
        ];
    }
}
