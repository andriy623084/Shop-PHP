<?php include ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1>User`s cabinet</h1>

            <h3> Welcome <?php echo $user['name']?></h3>

            <ul>
                <li> <a href="/Zinchenko-shop/Source_Files/user/edit/"> Edit user`s data</a></li>
                <li> <a href="/Zinchenko-shop/Source_Files/user/history/">List of bought items</a> </li>
            </ul>
        </div>
    </div>
</section>


<?php include ROOT.'/views/layouts/footer.php' ?>
