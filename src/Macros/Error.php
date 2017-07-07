<?php

namespace Appstract\ResponseMacros\Macros;

use Appstract\ResponseMacros\ResponseMacroInterface;

class Error implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('error', function ($message = 'Bad Request', $status = 400) use ($factory) {
            return $factory->make([
                'errors' => [
                    'message' => $message,
                ],
            ], $status);
        });
    }
}
