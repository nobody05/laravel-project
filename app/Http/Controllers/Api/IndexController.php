<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    /**
     * @return string[]
     */
    public function index()
    {
        return $this->apiSuccess([
            'name'=> 'jack'
        ]);
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
