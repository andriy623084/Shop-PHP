<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015</p>
                <p class="pull-right">Курс PHP Start</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/Zinchenko-shop/Source_Files/template/js/jquery.js"></script>
<script src="/Zinchenko-shop/Source_Files/template/js/bootstrap.min.js"></script>
<script src="/Zinchenko-shop/Source_Files/template/js/jquery.scrollUp.min.js"></script>
<script src="/Zinchenko-shop/Source_Files/template/js/price-range.js"></script>
<script src="/Zinchenko-shop/Source_Files/template/js/jquery.prettyPhoto.js"></script>
<script src="/Zinchenko-shop/Source_Files/template/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/Zinchenko-shop/Source_Files/cart/addAjax/"+id,{},function (data) {
                $("#cart_count").html(data)
            });
            return false;
        })
    })
</script>

</body>
</html>