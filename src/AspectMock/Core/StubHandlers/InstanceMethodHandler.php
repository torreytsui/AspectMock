<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

class InstanceMethodHandler implements StubHandleable
{
    use StubMethodHandler;

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return bool
     */
    protected function getParams(Mocker $mocker, MethodInvocation $invocation)
    {
        $obj = $invocation->getThis();
        $method = $invocation->getMethod();
        return $mocker->getObjectMethodStubParams($obj, $method);
    }
}
