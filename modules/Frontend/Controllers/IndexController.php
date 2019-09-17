<?php

namespace App\Frontend\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $db = $this->di->get('db');
        $data = $db->query('select * from AppUsers')->fetchAll(\PDO::FETCH_OBJ);

        var_dump($data);
        die();

        $this->view->setVar('data', $data);
    }
}
