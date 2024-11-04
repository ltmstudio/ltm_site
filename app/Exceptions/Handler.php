<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            $statusCode = $exception->getStatusCode();
    
            if ($statusCode == 404) {
                // Получаем язык из URL или используем язык по умолчанию
                $lang = $request->segment(1);
    
                // Если язык не задан или некорректен, устанавливаем язык по умолчанию (например, 'ru')
                if (!in_array($lang, ['ru', 'en', 'tm'])) {
                    $lang = 'ru';  // Установите ваш язык по умолчанию
                }
    
                // Возвращаем страницу 404 с переданной языковой переменной
                return response()->view('errors.404', ['lang' => $lang], 404);
            }
        }
    
        return parent::render($request, $exception);
    }
}
