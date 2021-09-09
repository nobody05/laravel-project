<?php

namespace App\Http\Requests\Index;

use App\Http\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:1',
            'password' => 'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'username.min'=> '用户名格式错误',
            'password.required' => '密码不能为空',
            'password.min'=> '密码格式错误',

        ];
    }
}
