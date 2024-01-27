<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
            <?php if (function_exists('the_custom_logo')): ?>
            <?php  the_custom_logo()?>
            <?php endif; ?>
        </div>
        <div class="large-6 cell menu">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container_class' => 'menu simple main-nav'
            ]) ?>
        </div>
    </div>

    <div class="grid-x grid-padding-x showcase">
        <div class="large-12 cell">
            <div class="callout secondary">
                <h1>Discount Clothing</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aspernatur aut consequatur
                    corporis dolor eum excepturi explicabo facere fugit itaque nostrum numquam quis quod ratione
                    reiciendis, repellendus saepe velit!</p>
                <button class="button">Start Shoping</button>
            </div>
        </div>
    </div>

    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <div class="products">
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 small-12 cell product end">
                        <h3>Blue Shirt</h3>
                        <h4>$9.99</h4>
                        <img src="/img/shirt_blue_white.jpg" alt="Blue Shirt">
                        <button class="button">Details</button>
                    </div>
                    <div class="large-4 medium-4 small-12 cell product end">
                        <h3>Red Shirt</h3>
                        <h4>$19.99</h4>
                        <img src="/img/shirt_red.jpg" alt="Red Shirt">
                        <button class="button">Details</button>
                    </div>
                    <div class="large-4 medium-4 small-12 cell product end">
                        <h3>Grey Shirt</h3>
                        <h4>$11.99</h4>
                        <img src="/img/shirt_grey.jpg" alt="Grey Shirt">
                        <button class="button">Details</button>
                    </div>
                    <div class="large-4 medium-4 small-12 cell product end">
                        <h3>Orange Shirt</h3>
                        <h4>$9.99</h4>
                        <img src="/img/shirt_orange.jpg" alt="Orange Shirt">
                        <button class="button">Details</button>
                    </div>
                    <div class="large-4 medium-4 small-12 cell product end">
                        <h3>Black Shirt</h3>
                        <h4>$11.99</h4>
                        <img src="/img/shirt_black.jpg" alt="Black Shirt">
                        <button class="button">Details</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="large-4 medium-4 cell">
            <div class="callout">
                <h3>Categories</h3>
                <ul class="menu vertical">
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Hats</a></li>
                    <li><a href="#">Shoes</a></li>
                </ul>
            </div>
            <hr>
            <div class="callout">
                <h5>Sidebar Heading</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda harum reprehenderit repudiandae
                    sit voluptatum. Accusantium aspernatur enim, est et fugiat ipsa labore nam nisi odio provident
                    reprehenderit soluta velit, veniam!</p>
                <a href="http://foundation.zurb.com/sites/docs" class="button small">Go to Foundation Docs</a>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy;2016, MyShop</p>
</footer>
<?php wp_footer(); ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
