<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

trait StubStaticMethodHandler
{
    use StubMethodHandler;

    /**
     * @inheritdoc
     */
    protected function isApplicable(Mocker $mocker, MethodInvocation $invocation)
    {
        return !is_object($invocation->getThis());
    }
}
