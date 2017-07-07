<?php

namespace Appstract\ResponseMacros\Macros;

use Appstract\ResponseMacros\ResponseMacroInterface;

class Success implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('success', function ($data, $status = 200) use ($factory) {
            return $factory->make([
                'data' => $data,
            ], $status);
        });
    }
}
