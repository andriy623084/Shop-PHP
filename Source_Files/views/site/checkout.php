<?php include ROOT . '/views/layouts/header.php'; ?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->




            <div class="shopper-informations">

                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if(isset($_SESSION['products'])): ?>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Shopper Information</p>
                            <form action="#" method="post">
                                <input type="text" name="name" placeholder="User Name">
                                <input type="number" name="phone" placeholder="Phone number">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text"  name="comment" placeholder="Comment">
                                <input type="submit" name="submit" value="Continue">
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <div class="col-sm-6">
                                <div class="total_area">
                                    <ul>
                                        <li>Cart Sub Total <span><?php echo $total?></span></li>

                                        <li>Eco Tax <span>$2</span></li>
                                        <li>Shipping Cost <span>Free</span></li>
                                        <li>Total price <span><?php echo $total ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="review-payment">
                <h2>Review & Payment</h2>
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
                        </tr>

                    <?php endforeach;?>
                    <?php else :?>
                        <div class="register-req">
                            <p>Order is saved!!!</p>
                        </div>
                    <?php endif;?>

                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

<?php include ROOT . '/views/layouts/footer.php'; ?>