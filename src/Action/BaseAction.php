<?php

namespace Acme\Action;

/**
 * Class BaseAction
 *
 * @package Acme\Action
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
abstract class BaseAction implements ActionInterface
{
    /**
     * @var array
     */
    protected $arguments;

    /**
     * @inheritdoc
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    public function __construct()
    {
        $this->arguments = func_get_args();
    }
}
