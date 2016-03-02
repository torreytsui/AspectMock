<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

class ClassMagicMethodHandler implements StubHandleable
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
        $class = get_class($invocation->getThis());
        return $mocker->getClassMethodStubParams($class, $method);
    }
}
