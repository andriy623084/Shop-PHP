<?php
class Cart
{
    public static function addproduct($id)
    {
        $id = intval($id);
        $productInCart = array();

        if(isset($_SESSION['products']))
        {
//            session_destroy();
//            echo '<pre>';print_r($_SESSION['products']);die();
            $productInCart = $_SESSION['products'];
        }
        if(array_key_exists($id,$productInCart))
        {
            $productInCart[$id] ++;
        }else {
            $productInCart[$id] = 1;
        }
        $_SESSION['products'] = $productInCart;

        return self::countItems();
    }

    public static function countItems()
    {
        $productInCart = array();
//        echo '<pre>';print_r($_SESSION['products']);die();

        if(isset($_SESSION['products']))
        {
            $count = 0;
            $productInCart = $_SESSION['products'];

            foreach ($productInCart as $id => $quantity)
            {
//                echo '<pre>';print_r($quantity);die();
                $count += $quantity;
            }
            return $count;
        }else{
            return 0;
        }
    }

    public static function getProducts() //products in cart
    {
        if(isset($_SESSION['products']))
        {
            $productInCart = $_SESSION['products'];
            $products = array();

            foreach ($productInCart as $id => $quantity)
            {
                $singleProduct = Product::getProductById($id);
                $products[$id] = $singleProduct;
                $products[$id]['quantity'] = $quantity; //add to array of product it`s quantity
            }
            return $products;
        }
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = $products;
        $total = 0;

        if($productsInCart)
        {
            foreach ($productsInCart as $id => $product)
            {
                $total += $product['price'] * $product['quantity'];
            }
            return $total;
        }
    }

    public static function clear()
    {
        if(isset($_SESSION['products']))
        {
            unset($_SESSION['products']);
        }
    }

    public static function delete($id)
    {
        $products = $_SESSION['products'];
        foreach ($products as $key=>$value)
        {
            if($id == $key)
            {
                unset($products[$key]);
            }
        }
        $_SESSION['products'] = $products;
    }
}

?>