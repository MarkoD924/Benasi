<?php

namespace app\Controllers;
use app\core\BaseController;
use app\models\UserModel;

class HomeController extends BaseController
{     
        public function home()
    {
        
        $this->view->render('home','main',null);
    }
}