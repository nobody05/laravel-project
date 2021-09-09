<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index\LoginRequest;
use Illuminate\Http\Request;

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

        return $this->apiSuccess([
            'name' => $params['username']
        ]);

    }
}
