<?php

namespace App\Frontend\Controllers;

use App\Core\Models\AppUser;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $users = AppUser::find();

        foreach ($users as $user) {
            print_r($user);
        }

        $this->view->disable();
    }
}
