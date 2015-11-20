<?php

namespace Acme\Executor;

/**
 * Class AddExecutor
 *
 * @package Acme\Executor
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AddExecutor implements ExecutorInterface
{
    /**
     * @inheritDoc
     */
    public function execute(array $arguments)
    {
        return array_sum($arguments);
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedActions()
    {
        return ['add'];
    }
}
