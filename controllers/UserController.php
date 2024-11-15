<?php
namespace app\Controllers;

use app\core\BaseController;
use app\models\UserModel;

class UserController extends BaseController
{
    public function readUser()
    { 
        $model=new UserModel();
        $model->email='markodimitrijevic924@gmail.com';
        $model->firstName= 'Marko';
        $model->lastName= 'Dimitrijevic';

        

        $this->view->render("getUser",'main',$model);   
    }
}