<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguyenLieuRequest extends FormRequest
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
            'txtName' =>'required',
            'txtSoLuong' =>'required',
            'txtDonViTinh' =>'required',
            'txtPrice' =>'required',
            'txtTinhTrang' =>'required'
        ];
    }
    public function messages(){
        
        return [
            'txtName.required' => 'Vui lòng nhập tên nguyên liệu',
            'txtSoLuong.required'=>'Vui lòng nhập số lượng',
            'txtDonViTinh.required' => 'Vui lòng nhập đơn vị tính',
            'txtPrice.required' => 'Vui lòng nhập giá nguyên liệu',
            'txtTinhTrang.required' => 'Vui lòng nhập tình trạng',
        ];        
    }
}
