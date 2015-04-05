<?php
/**
 * Permission.php
 * ----------------------------------------------
 *
 *
 * @author      Stanislav Kiryukhin <korsar.zn@gmail.com>
 * @copyright   Copyright (c) 2015, CKGroup.ru
 *
 * ----------------------------------------------
 * All Rights Reserved.
 * ----------------------------------------------
 */
namespace Phalcon\Ext\Rbac;


use Phalcon\DI;

/**
 * Class Permission
 * @package Phalcon\Ext\Rbac
 */
class Permission extends \SKGroup\Rbac\Permission implements PermissionInterface
{
    /**
     * @param $name
     * @param callable $callback
     * @return RuleInterface
     */
    protected function createRuleCallback($name, Callable $callback)
    {
        return DI::getDefault()->get('\SKGroup\Rbac\Rule\Callback', [$name, $callback]);
    }
}
