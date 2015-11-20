<?php

namespace Acme\Action;

/**
 * Class AddAction
 *
 * @package Acme\Action
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AddAction extends BaseAction
{
    /**
     * @inheritDoc
     */
    public static function getName()
    {
        return 'add';
    }
}
