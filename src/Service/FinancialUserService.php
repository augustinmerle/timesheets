<?php
/**
 * Created by PhpStorm.
 * User: augustindelaveaucoupet
 * Date: 23/05/2019
 * Time: 10:41
 */

namespace App\Service;


use App\Entity\User;

class FinancialUserService
{
    public function __construct(User $user)
    {
    $this->user = $user;
    }


}