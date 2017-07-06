<?php

namespace Appstract\ResponseMacros\Macros;

use Illuminate\Support\Facades\Response;
use Appstract\ResponseMacros\ResponseMacroInterface;

class Pdf implements ResponseMacroInterface
{
    public function run($factory)
    {
        $factory->macro('pdf', function ($pdf, $fileName) use ($factory) {
            return $factory->make($pdf)->withHeaders([
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
            ]);
        });
    }
}

// // response()->pdf($pdf, ‘filename’)

// response($invoice->pdf(), 200)
//             ->header('Content-Type', 'application/pdf')
//             ->header('Content-Disposition', 'attachment; filename="'. $invoice->pdfFileName.'"')
