<?php

namespace App\Frontend\Controllers;

use App\Core\Models\AppUser;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $data =  AppUser::findFirst('id=2');

        var_dump($data->id);
    }
}
