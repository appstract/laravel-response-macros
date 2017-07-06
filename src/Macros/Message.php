<?php

namespace Appstract\ResponseMacros\Macros;

use Appstract\ResponseMacros\ResponseMacroInterface;

class Message implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('message', function ($message, $status) use ($factory) {
            $customFormat = [
                'message' => $message,
                'status' => $status,
            ];

            return $factory->make($customFormat);
        });
    }
}
