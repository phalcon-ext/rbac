<?php
/**
 * ManagerInterface.php
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


use Phalcon\DI\InjectionAwareInterface;
use Phalcon\DiInterface;

/**
 * Interface ManagerInterface
 * @package Phalcon\Ext\Rbac
 */
interface ManagerInterface extends \SKGroup\Rbac\ManagerInterface, InjectionAwareInterface
{
    /**
     * @param DiInterface $di
     */
    public function __construct(DiInterface $di);
}
