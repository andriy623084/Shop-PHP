<?php
class Order
{
    public static function save($userName, $userPhone, $userComment, $userId, $productsInCart)
    {
        //show data
        $today = date("Y-m-d H:i:s");

        $db = DB::getConnection();
        $sql = 'INSERT INTO product_order(id, user_name, user_phone,user_comment,user_id,date,products) VALUES (NULL, :user_name,:user_phone,:user_comment,:user_id,:date,:products )';
        $products = json_encode($productsInCart);
        $result = $db->prepare($sql);

        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_INT);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        $result->bindParam(':date', $today, PDO::PARAM_STR);

        return $result->execute();
    }
}
?>