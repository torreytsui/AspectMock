<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

trait StubStaticMagicMethodHandler
{
    use StubMagicMethodHandler;

    /**
     * @inheritdoc
     */
    protected function isApplicable(Mocker $mocker, MethodInvocation $invocation)
    {
        return '__callStatic' == $invocation->getMethod();
    }
}
