<?php
/**
 * Manager.php
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


use Phalcon\DiInterface;


/**
 * Class Manager
 * @package Phalcon\Ext\Rbac
 */
class Manager extends \SKGroup\Rbac\Manager implements ManagerInterface
{
    /**
     * @var \Phalcon\DiInterface
     */
    protected $dependencyInjector;

    /**
     * @param DiInterface $di
     */
    public function __construct(DiInterface $di)
    {
        $this->setDI($di);
    }

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI($dependencyInjector)
    {
        $this->dependencyInjector = $dependencyInjector;
    }

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\DiInterface
     */
    public function getDI()
    {
        return $this->dependencyInjector;
    }

    /**
     * @param $name
     * @return RoleInterface
     */
    protected function createRole($name)
    {
        return $this->getDI()->get('\Phalcon\Ext\Rbac\Role', [$this, $name]);
    }

    /**
     * @param $name
     * @return PermissionInterface
     */
    protected function createPermission($name)
    {
        return $this->getDI()->get('\Phalcon\Ext\Rbac\Permission', [$name]);
    }
}
