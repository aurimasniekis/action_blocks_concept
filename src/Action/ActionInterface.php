<?php

namespace Acme\Action;

/**
 * Interface ActionInterface
 *
 * @package Acme\Action
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface ActionInterface
{
    /**
     * @return array
     */
    public function getArguments();

    /**
     * @return string
     */
    public static function getName();
}
