<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienRequest extends FormRequest
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
            'txtChucVu' =>'required',
            'txtDiaChi' =>'required',
            'txtSDT' =>'required',
            'txtCaLam' =>'required'
        ];
    }
    public function messages(){
        
        return [
            'txtName.required' => 'Vui lòng nhập tên nhân viên',
            'txtChucVu.required'=>'Vui lòng nhập chức vụ',
            'txtDiaChi.required' => 'Vui lòng nhập địa chỉ',
            'txtSDT.required' => 'Vui lòng nhập số điện thoại',
            'txtCaLam.required' => 'Vui lòng nhập ca làm',
        ];        
    }
}
