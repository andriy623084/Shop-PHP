<?php
//include_once ROOT.'/models/Product.php';
//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/components/Pagination.php'; // Autoloader working in index.php instead

class CatalogController
{
    public function actionView()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(10);

        require_once (ROOT.'/views/catalog/catalog.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {

        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId,$page);

        $total = Product::getTotalProductInCategory($categoryId);

        $pagination = new Pagination($total,$page,Product::SHOW_BY_DEFAULT,'page-');

        require_once (ROOT.'/views/catalog/category.php');
        return true;
    }
}
?>