<?php include ROOT . '/views/layouts/header.php'; ?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <?php if(!$productsInCart): ?>
                        <ul>
                            <?php echo "Trolley is empty, please choose something "?>
                        </ul>
                    <?php endif; ?>
                    <tbody>

                    <?php foreach ($productsInCart as $productId => $product): ?>

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="/Zinchenko-shop/Source_Files/template/images/home/<?php echo $product['image']?>" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="/Zinchenko-shop/Source_Files/product/<?php echo $product['id'];?>"><?php echo $product['name']?></a></h4>
                            <p><?php echo $product['id'];?></p>
                        </td>
                        <td class="cart_price">
                            <p><?php echo $product['price'];?></p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $product['quantity'];?>" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price"><?php echo $product['price'] * $product['quantity'];?></p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="/Zinchenko-shop/Source_Files/cart/delete/<?php echo $product['id']?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <?php if (isset($total)):?>
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span><?php echo $total?></span></li>
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span><?php echo $total ?></span></li>
                        </ul>
                        <a class="btn btn-default check_out" href="/Zinchenko-shop/Source_Files/checkout">Check Out</a>
                    </div>
                </div>
            </div>
           <?php endif;?>
        </div>
    </section>

    <!--/#do_action-->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $(".cart_quantity_delete").onclick(function () {-->
<!--            -->
<!--        })-->
<!--    })-->
<!--</script>-->


<?php include ROOT . '/views/layouts/footer.php'; ?>