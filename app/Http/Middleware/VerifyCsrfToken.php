<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'index/index/save',
        'index/sel',
        'index/index/money',
        'index/index/fen',
        'index/index/fens',
        'index/save',
        'index/zhu',
        'index/ma',
        'index/insert',
        'index/a',
        'index/ion'

    ];
}
