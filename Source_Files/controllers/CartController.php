<?php

class CartController
{
    public function actionAdd($id)
    {
        Cart::addproduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        echo Cart::addproduct($id);
        return true;
    }

    public function actionDelete($id)
    {
        Cart::delete($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionIndex()
    {
//        $categories = array();
//        $categories = Category::getCategoriesList(); //Zinchenko added it

        $productsInCart = array();
        $productsInCart = Cart::getProducts();
        if($productsInCart)
        {
            $total = Cart::getTotalPrice($productsInCart);
        }


        require_once (ROOT.'/views/site/cart.php');
        return true;
    }

    public function actionCheckout()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = array();
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            $total = Cart::getTotalPrice($productsInCart);
        }

        //status of successful order
//        $result = false;
//
        if (isset($_POST['submit'])) {
            $userName = $_POST['name'];
            $userPhone = $_POST['phone'];
            $userEmail = $_POST['email'];
            $userComment = $_POST['comment'];

            $errors = false;
            if (!User::checkName($userName)) {
                $errors[] = 'Wrong name';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Wrong phone';
            }
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Wrong email';
            }
            if ($errors == false)
            {
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    $adminEmail = 'anvov@smile.fr';
                    $message = 'mhk.org.ua';
                    $subject = 'new order';
                    mail($adminEmail, $subject, $message);
                    Cart::clear();
                }
            }
        }
            require_once(ROOT . '/views/site/checkout.php');
            return true;
    }
}

?>