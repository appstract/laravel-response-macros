<?php

namespace Appstract\ResponseMacros;

use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseMacros
{
    /**
     * Macros.
     * @var array
     */
    protected $macros = [];

    /**
     * Constructor.
     * @param ResponseFactory $factory
     */
    public function __construct(ResponseFactory $factory)
    {
        $this->macros = [
            Macros\Message::class,
            Macros\Success::class,
            Macros\Error::class,
            Macros\Pdf::class,
        ];

        $this->bindMacros($factory);
    }

    /**
     * Bind macros.
     * @param  ResponseFactory $factory
     * @return void
     */
    public function bindMacros($factory)
    {
        foreach ($this->macros as $macro) {
            (new $macro)->run($factory);
        }
    }
}
