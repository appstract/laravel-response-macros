<?php

namespace Appstract\ResponseMacros;

interface ResponseMacroInterface
{
    /**
     * [run description]
     * @param  ResponseFactory $factory
     */
    public function run($factory);
}
