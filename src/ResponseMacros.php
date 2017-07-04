<?php

namespace Appstract\ResponseMacros;

use Illuminate\Support\Facades\Response;
use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseMacros
{

    /**
     * Constructor.
     */
    public function __construct(ResponseFactory $factory)
    {
    	// response()->message('hello world!', 200);

        $factory->macro('message', function ($message, $status) use ($factory) {
            
            $customFormat = [
                'message' => $message,
                'status' => $status
            ];

            return $factory->make($customFormat);
        });
    }

}
