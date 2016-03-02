<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

class ClassStaticMethodHandler implements StubHandleable
{
    use StubStaticMethodHandler;

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return bool
     */
    protected function getParams(Mocker $mocker, MethodInvocation $invocation)
    {
        $class = $invocation->getThis();
        $method = $invocation->getMethod();
        return $mocker->getClassMethodStubParams($class, $method);
    }
}
