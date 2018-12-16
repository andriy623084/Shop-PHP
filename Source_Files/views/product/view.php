<html lang="en">
<?php include  ROOT.'/views/layouts/header.php'?>
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
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="/Zinchenko-shop/Source_Files/template/images/home/<?php echo $product['image']?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="/Zinchenko-shop/Source_Files/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $product['name']?></h2>
                                <p>Код товара: <?php echo $product['code']?></p>
                                <span>
                                            <span>US <?php echo $product['price']?></span>
                                            <label>Количество: <?php echo $product['availability']?></label>
                                            <input type="text" value="3" />
                                            <a href="/Zinchenko-shop/Source_Files/cart/add/<?php echo $product['id']?>" class="btn btn-fefault cart" >
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </a>
                                        </span>
                                <p><b>Наличие:</b> <?php if ($product['availability']) echo "На складе"; else echo "нет на складе"?></p>
                                <p><b>Состояние:</b> Новое</p>
                                <p><b>Производитель:</b> D&amp;G</p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <p> <?php echo $product['description']?></p>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>


<br/>
<br/>

<?php include ROOT.'/views/layouts/footer.php' ?>
