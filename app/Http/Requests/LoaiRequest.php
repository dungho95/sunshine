<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiRequest extends FormRequest
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
            'l_ten'=> 'required|unique:loai|max:60',
            'l_taoMoi' => 'required',
             'l_capNhat'=> 'required',
             'l_trangthai'=>'required',
         ];

    }
    
    public function messages(){
        return[
            'l_ten.required'=>'Tên loại bắt buộc nhập',
            'l_ten.unique'=>'Tên loại đã có trong hệ thống. Vui lòng kiểm tra lại',
            'l_ten.max'=> 'Tên loại đã vượt quá số lượng cho phép',
            'l_taoMoi.required'=>'Ngày tạo mới ko được phép rỗng'
        ];
    }
}
