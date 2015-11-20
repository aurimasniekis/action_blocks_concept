<?php

namespace Acme\Executor;

/**
 * Class InSequalExecutor
 *
 * @package Acme\Executor
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class InSequalExecutor implements ExecutorInterface
{
    /**
     * @inheritDoc
     */
    public function execute(array $arguments)
    {
        return $arguments;
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedActions()
    {
        return ['in_sequel'];
    }
}
