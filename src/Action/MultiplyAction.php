<?php

namespace Acme\Action;

/**
 * Class MultiplyAction
 *
 * @package Acme\Action
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class MultiplyAction extends BaseAction
{
    /**
     * @inheritDoc
     */
    public static function getName()
    {
        return 'multiply';
    }
}
