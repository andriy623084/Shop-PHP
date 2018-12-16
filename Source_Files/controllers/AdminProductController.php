<?php

class AdminProductController extends AdminBase
{

    public function acionIndex()
    {
        //check user`s rights
        self::checkAdmin();

        $productsList = Product::getProductsListByCategory();

        require_once (ROOT.'/views/admin_product/index.php');
        return true;
    }

}
?>