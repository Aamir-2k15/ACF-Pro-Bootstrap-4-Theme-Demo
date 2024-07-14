<footer class="pt-5 pb-1 bg-dark  text-white">
    <div class="container">
        <div class="row rel row-site-links">
            <div class="col-lg-3 col-md-12 common-col">
                <?php dynamic_sidebar('footer_1'); ?>
            </div>
            <div class="col-lg-3 col-md-12 common-col col-site">
                <?php dynamic_sidebar('footer_2'); ?>
            </div>
            <div class="col-lg-2 col-md-12 common-col">
                <?php dynamic_sidebar('footer_3'); ?>
            </div>
            <div class="col-lg-4 col-md-12 common-col">
                <?php dynamic_sidebar('footer_4'); ?>

            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="m-0 text-center text-white"><?php echo !empty(COMMON_DATA['footer_text']) ? COMMON_DATA['footer_text'] : ''; ?></div>
    </div>
    <!-- /.container -->
</footer>
<?php wp_footer(); ?>

</body>

</html>