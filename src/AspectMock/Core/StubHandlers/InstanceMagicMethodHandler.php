<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

class InstanceMagicMethodHandler implements StubHandleable
{
    use StubMagicMethodHandler;

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return bool
     */
    protected function getParams(Mocker $mocker, MethodInvocation $invocation)
    {
        $args = $invocation->getArguments();
        $method = array_shift($args);
        return $mocker->getObjectMethodStubParams($invocation->getThis(), $method);
    }
}
