<?php


class SiteController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList(); //not working in catalog.php

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(5);//not working in catalog.php

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function actionContact()
    {

        if (isset($_POST['submit'])) {
            $message = $_POST['message'];
            $email = $_POST['email'];

            $errors = false;

            if (!User::checkName($message)) {
                $errors[] = "Please write some messsage to us";
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }
            if($errors == false)
            {
                $adminMail = 'vovk6230@ukr.net';
                $subject = 'Zinchenko shop';
                $message = "Text: {$message} from: {$email}";
                $result = mail($adminMail,$subject,$message);
                $result = true;
            }
        }
        require_once(ROOT . '/views/site/contacts.php');
        return true;
    }
}



?>