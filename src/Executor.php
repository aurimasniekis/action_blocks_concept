<?php

namespace Acme;

use Acme\Action\ActionInterface;
use Acme\Executor\ExecutorInterface;

/**
 * Class Executor
 *
 * @package Acme
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Executor
{
    /**
     * @var ExecutorInterface[]
     */
    protected $executors;

    public function __construct()
    {
        $this->executors = [];
    }

    public function addExecutor(ExecutorInterface $executor)
    {
        $supportedActions = $executor->getSupportedActions();

        foreach ($supportedActions as $supportedAction) {
            $this->executors[$supportedAction] = $executor;
        }

        return $this;
    }

    /**
     * @param ActionInterface $action
     *
     * @return mixed
     */
    public function execute(ActionInterface $action)
    {
        $arguments = $this->parseArguments($action->getArguments());

        $executor = $this->getExecutor($action->getName());

        return $executor->execute($arguments);
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasExecutor($name)
    {
        return array_key_exists($name, $this->executors);
    }


    public function getExecutor($name)
    {
        if (false === $this->hasExecutor($name)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Excecutor with name "%s" does not exist',
                    $name
                )
            );
        }

        return $this->executors[$name];
    }

    /**
     * @param array $arguments
     *
     * @return array
     */
    public function parseArguments(array $arguments)
    {
        $result = [];

        foreach ($arguments as $argument) {
            if ($argument instanceof ActionInterface) {
                $result[] = $this->execute($argument);
            } else {
                $result[] = $argument;
            }
        }

        return $result;
    }
}
