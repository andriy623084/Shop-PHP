<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    <?php if(isset($result)): ?>
                        <p>Email sent!</p>
                    <?php var_dump($result); else: ?>
                        <?php if(isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Contact us</h2>
                            <form action="#" method="post">
                                <p>Email</p>
                                <input type="email" name="email" placeholder="E-mail" />
                                <p>Message</p>
                                <input type="text" name="message" placeholder="Message" />
                                <input type="submit" name="submit" class="btn btn-default" value="Send" />
                            </form>
                        </div><!--/sign up form-->

                    <?php endif; ?>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>