<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
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
            
        });

        $this->renderable(function (Throwable $e, $request) {
            return $this->handlerAppException($e, $request);
        });
    }

    
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function handlerAppException(Throwable $e, $request) {
        if ($request->is('api/*')) {

            $code = 520;
            $message = 'Error';

            if ( $e instanceof ConnectionException ) {
                $code = 510;
                $message = 'Third party not available.';
            } 
             else if ( $e instanceof RequestException ) {
                $code = 404;
                $message = 'Request not valid.';
            }
             else if ( $e instanceof NotFoundHttpException ) {
                $code = 404;
                $message = 'Resource not found.';
            }
            

            return response()->json([
                'message' => $message
            ], $code);
        } else {
            return response()->view('errors.invalid-order', [], 500);
        }
    }
}
