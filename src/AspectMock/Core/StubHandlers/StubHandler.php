<?php

namespace AspectMock\Core\StubHandlers;

use AspectMock\Core\Mocker;
use AspectMock\Intercept\MethodInvocation;

trait StubHandler
{
    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return mixed
     */
    public function handle(Mocker $mocker, MethodInvocation $invocation)
    {
        if (!$this->isApplicable($mocker, $invocation)) {
            return __AM_CONTINUE__;
        }

        $params = $this->getParams($mocker, $invocation);

        if ($params !== false) {
            return $this->stub($mocker, $invocation, $params);
        } else {
            return __AM_CONTINUE__;
        }
    }

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return bool
     */
    protected function isApplicable(Mocker $mocker, MethodInvocation $invocation)
    {
        return true;
    }

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     *
     * @return []
     */
    protected abstract function getParams(Mocker $mocker, MethodInvocation $invocation);

    /**
     * @param Mocker $mocker
     * @param MethodInvocation $invocation
     * @param $params
     *
     * @return mixed
     */
    protected function stub(Mocker $mocker, MethodInvocation $invocation, $params)
    {
        return $mocker->stub($invocation, $params);
    }
}
