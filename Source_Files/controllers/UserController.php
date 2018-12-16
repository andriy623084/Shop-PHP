<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name))
            {
                $errors[] = "Name has to be not shorter than 2 characters";
            }
            if (!User::checkEmail($email))
            {
                $errors[] = 'Wrong email';
            }
            if(!User::checkPassword($password))
            {
                $errors[] = 'Password should not be shorter then 6 symbols';
            }
            if(User::checkEmailExists($email))
            {
                $errors[] = 'email already used';
            }
            if($errors == false)
            {
                $result = User::register($name, $email, $password);
            }
        }

        require_once (ROOT.'/views/user/register.php');
        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email))
            {
                $errors[] = 'Wrong email';
            }
            if(!User::checkPassword($password))
            {
                $errors[] = 'Password should not be shorter then 6 symbols';
            }

            $userId = User::checkUserData($email,$password);

            if($userId == false)
            {
                $errors[] = 'Login or password is wrong';
            }
            else {
                User::auth($userId);

                //Redirection user to bo office
                header("Location: /Zinchenko-shop/Source_Files/cabinet/");
            }
        }


        require_once (ROOT.'/views/user/login.php');
        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: /Zinchenko-shop/Source_Files/');
    }
}


?>