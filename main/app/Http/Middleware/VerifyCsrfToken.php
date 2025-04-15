<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'https://hatf.sa/return_url',
        'https://hatf.sa/api/invoice-error-payment',
        'https://hatf.sa/api/webhook',
        'return_url',
    ];
}
