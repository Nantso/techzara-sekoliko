<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/22/18
 * Time: 4:33 PM
 */

namespace App\Sekoliko\Service\UserBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

/*
 * FosuserBundle
 */

class UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}