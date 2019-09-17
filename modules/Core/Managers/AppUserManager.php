<?php

namespace App\Core\Managers;

use App\Core\Models\AppUser;

class AppUserManager extends BaseManager
{
    /**
     * @param null $parameters
     *
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function find($parameters = null)
    {
        return AppUser::find($parameters);
    }
}
