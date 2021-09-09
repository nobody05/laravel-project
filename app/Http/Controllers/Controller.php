<?php

namespace App\Http\Controllers;

use App\Common\Constants;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * 接口成功
     * @param array $data
     * @param string $msg
     * @return array
     */
    public function apiSuccess(array $data = [], string $msg = 'success'): array
    {
        return [
            'msg' => $msg,
            'code' => Constants::API_CODE_SUCCESS,
            'data' => $data
        ];
    }

    /**
     * 接口失败
     * @param string $msg
     * @param int $code
     * @param array $data
     * @return array
     */
    public function apiFail(string $msg = 'api fail', int $code = Constants::API_CODE_FAIL, array $data = []): array
    {
        return [
            'msg' => $msg,
            'code' => $code,
            'data' => $data
        ];
    }

    /**
     * 自定义响应
     * @param string $msg
     * @param int $code
     * @param array $data
     * @return array
     */
    public function apiResponse(string $msg = '', int $code = 0, array $data = []): array
    {
        return [
            'msg' => $msg,
            'code' => $code,
            'data' => $data
        ];
    }
}
