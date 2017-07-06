<?php

namespace Appstract\ResponseMacros\Macros;

use Appstract\ResponseMacros\ResponseMacroInterface;

class Pdf implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('pdf', function ($pdf, $fileName, $download = false) use ($factory) {
            return $factory->make($pdf)->withHeaders(collect([
                'Content-Type' => 'application/pdf',
            ])->when($download, function ($collection) use ($fileName) {
                return $collection->put('Content-Disposition', 'attachment; filename="'.$fileName.'"');
            })->toArray());
        });
    }
}
