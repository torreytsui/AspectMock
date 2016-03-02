<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

interface StubHandleable {

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     * @return [boolean, mixed] done, result
     */
    public function handle(Mocker $mocker, MethodInvocation $invocation);
}
