<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    /**
     * @return string[]
     */
    public function index()
    {
        app('log')->info('this is test msg', []);
        return $this->apiSuccess([
            'name'=> 'jack'
        ]);
    }

    public function cacheGet()
    {
        return $this->apiSuccess([
            'yname' => Cache::get('yname')
        ]);
    }

    public function cacheSet()
    {
        if (Cache::add('yname', 'jack')) {
            return $this->apiSuccess();
        }
        return $this->apiFail('cache set fail.');

    }

    /**
     * @param LoginRequest $loginRequest
     * @return array
     */
    public function login(LoginRequest $loginRequest): array
    {
        $params = $loginRequest->validated();

        Log::channel("daily_api_index")->info("get-request", [$params]);

        return $this->apiSuccess([
            'name' => $params['username']
        ]);

    }
}
