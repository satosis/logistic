<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'c_name'            => 'required|min:5|max:50|unique:category,c_name',
            'c_cate'            => 'required'
        ];
    }
    public function messages(){
        return [
            'c_name.required'   =>'Tên danh mục không được để trống',
            'c_name.unique'     =>'Tên danh mục đã tồn tại',
            'c_name.min'        =>'Tên danh mục phải nhiều hơn 5 kí tự',
            'c_name.max'        =>'Tên danh mục phải ít hơn 50 ký tự',
            'c_cate.required'   =>'Bạn chưa chọn thể loại danh mục'
        ];
    }
}
