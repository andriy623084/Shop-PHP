<?php

class CabinetController
{
    public function actionIndex()
    {
        $userId = User::checkLogged();

        //Get user`s personal data
        $user = User::getUserById($userId);
        require_once (ROOT.'/views/cabinet/index.php');
        return true;
    }

    public function actionEdit()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name))
            {
                $errors[] = 'Name has to be not shorter than 2 characters';
            }
            if(!User::checkPassword($password))
            {
                $errors[] = 'Password should not be shorter then 6 symbols';
            }
            if($errors == false)
            {
                $result = User::edit($userId,$name,$password);
            }
        }
        require_once ROOT.'/views/cabinet/edit.php';
        return true;
    }
}
?>