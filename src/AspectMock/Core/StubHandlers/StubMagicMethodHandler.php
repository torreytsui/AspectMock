<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

trait StubMagicMethodHandler
{
    use StubHandler;

    /**
     * @inheritdoc
     */
    protected function isApplicable(Mocker $mocker, MethodInvocation $invocation)
    {
        return '__call' == $invocation->getMethod();
    }

    /**
     * @inheritdoc
     */
    protected function stub(Mocker $mocker, MethodInvocation $invocation, $params)
    {
        return $mocker->stubMagicMethod($invocation, $params);
    }
}
