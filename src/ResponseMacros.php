<?php

namespace Appstract\ResponseMacros;

use Appstract\ResponseMacros\Macros;
use Illuminate\Support\Facades\Response;
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
    		Macros\Message::class
    	];

    	$this->bindmMacros($factory);
    }

    /**
     * Bind the macros
     */
    public function bindmMacros($factory)
    {
    	foreach ($this->macros as $macro) 
    	{
    		(new $macro)->run($factory);
    	}
    }

}
