<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

class InheritanceMethodHandler implements StubHandleable
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
        $class = $invocation->getDeclaredClass();
        $method = $invocation->getMethod();
        return $mocker->getClassMethodStubParams($class, $method);
    }
}
