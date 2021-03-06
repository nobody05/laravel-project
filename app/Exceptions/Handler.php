<?php

namespace App\Exceptions;

use App\Common\Constants;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof HttpException) {
            $code = $e->getStatusCode();
        } else {
            $code = $e->getCode() ?: Constants::API_CODE_FAIL;
        }
        return response()->json([
            'msg' => $e->getMessage(),
            'code' => $code,
            'data' => []
        ]);
    }

    public function report(Throwable $e)
    {
        return parent::report($e); // TODO: Change the autogenerated stub
    }
}
