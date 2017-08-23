<?php

namespace Zan\Framework\Contract\Network;


use ZanPHP\Coroutine\Context;

interface RequestTerminator
{
    /**
     * @param Request $request
     * @param Response $response
     * @param Context $context
     * @return void
     */
    public function terminate(Request $request, Response $response, Context $context);
}