<html lang="en">
<?php include  ROOT.'/views/layouts/header.php';
include_once ROOT.'/models/Category.php';
?>
<!--/header-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/Zinchenko-shop/Source_Files/category/<?php echo $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id']) echo 'active';?>">
                                            <?php echo $categoryItem['name']?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>

             <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>

                    <?php foreach ($categoryProducts as $productItem):?>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/Zinchenko-shop/Source_Files/template/images/home/<?php echo $productItem['image']?>" alt="" />
                                        <h2><?php echo $productItem['price']?>$</h2>
                                        <p>
                                            <a href="/Zinchenko-shop/Source_Files/product/<?php echo $productItem['id'];?>">
                                                <?php echo $productItem['name'];?>
                                            </a>
                                        </p>
                                        <a href="/Zinchenko-shop/Source_Files/cart/add/<?php echo $productItem['id']?>" class="btn btn-default"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>

                                    <?php if($productItem['is_new']):?>
                                        <img src="/Zinchenko-shop/Source_Files/template/images/home/new.png" class="new" alt="" />
                                    <?php endif;?>

                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

<!--                    pagination-->
                    <?php echo $pagination->get();?>

                </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'?>

