<?php

namespace Acme\Executor;

use Acme\Action\ActionInterface;

/**
 * Interface ExecutorInterface
 *
 * @package Acme\Executor
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface ExecutorInterface
{
    /**
     * @return string[]
     */
    public static function getSupportedActions();

    /**
     * @param array $arguments
     *
     * @return mixed
     */
    public function execute(array $arguments);
}
