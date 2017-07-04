<?php

namespace Appstract\ResponseMacros;

use Illuminate\Support\Facades\Response;

class ResponseMacros
{

    /**
     * Constructor.
     */
    public function __construct()
    {
        Response::macro('upper', function ($value) {
            return Response::make(strtoupper($value));
        });

        Response::macro('lower', function ($value) {
            return Response::strtolower(str)($value);
        });
    }

}
