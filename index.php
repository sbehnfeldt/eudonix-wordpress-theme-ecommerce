<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body <?php body_class(); ?>>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
            <?php if ( function_exists( 'the_custom_logo' ) ): ?>
                <?php the_custom_logo() ?>
            <?php endif; ?>
        </div>
        <div class="large-6 cell menu">
            <?php wp_nav_menu( [
                'theme_location'  => 'primary',
                'container_class' => 'menu simple main-nav'
            ] ) ?>
        </div>
    </div>

    <?php if ( is_active_sidebar( 'showcase' ) ): ?>
        <div class="grid-x grid-padding-x showcase">
            <div class="large-12 cell">
                <div class="callout secondary">
                    <?php dynamic_sidebar( 'showcase' ) ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <div class="products row">
                <div class="grid-x grid-padding-x">
                    <?php if ( have_posts() ): ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="large-4 medium-4 small-12 cell product end">
                                <!--                        <h3>Blue Shirt</h3>-->
                                <!--                        <h4>$9.99</h4>-->
                                <!--                        <img src="/img/shirt_blue_white.jpg" alt="Blue Shirt">-->
                                <!--                        <button class="button">Details</button>-->
                                <h3><?php the_title(); ?></h3>
                                <?php if ( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="button">Details</a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="large-4 medium-4 cell">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
