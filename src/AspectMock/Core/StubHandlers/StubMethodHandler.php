<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

trait StubMethodHandler
{
    use StubHandler;

    /**
     * @inheritdoc
     */
    protected function isApplicable(Mocker $mocker, MethodInvocation $invocation)
    {
        return is_object($invocation->getThis());
    }

    /**
     * @inheritdoc
     */
    protected function stub(Mocker $mocker, MethodInvocation $invocation, $params)
    {
        return $mocker->stub($invocation, $params);
    }
}
