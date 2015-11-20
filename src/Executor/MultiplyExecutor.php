<?php

namespace Acme\Executor;

/**
 * Class MultiplyExecutor
 *
 * @package Acme\Executor
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class MultiplyExecutor implements ExecutorInterface
{
    /**
     * @inheritDoc
     */
    public function execute(array $arguments)
    {
        $sum = array_shift($arguments);

        foreach ($arguments as $argument) {
            $sum *= $argument;
        }

        return $sum;
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedActions()
    {
        return ['multiply'];
    }
}
