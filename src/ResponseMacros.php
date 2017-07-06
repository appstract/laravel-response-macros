<?php

namespace Appstract\ResponseMacros;


use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseMacros
{
    protected $macros = [];

    /**
     * Constructor.
     */
    public function __construct(ResponseFactory $factory)
    {
        $this->macros = [
            Macros\Message::class,
            Macros\Pdf::class,
        ];

        $this->bindMacros($factory);
    }

    /**
     * Bind the macros.
     */
    public function bindMacros($factory)
    {
        foreach ($this->macros as $macro) {
            (new $macro)->run($factory);
        }
    }
}
