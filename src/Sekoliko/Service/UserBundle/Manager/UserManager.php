<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/22/18
 * Time: 10:52 PM
 */

namespace App\Sekoliko\Service\UserBundle\Manager;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

class UserManager
{
    private $_entity_manager;
    private $_container;

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager  = $_entity_manager;
        $this->_container       = $_container;
    }

}