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

    <hr>

    <div class="grid-x grid-padding-x">
        <div class="large-8 medium-8 cell">
            <div class="products row">
                <div class="grid-x grid-padding-x">
                    <?php if ( have_posts() ): ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="row single-product">
                                <div class="large-5 columns">
                                    <a href="<?php echo site_url(); ?>" class="button">Go Back</a>
                                </div>
                                <?php if ( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>

                                <div class="large-7 columns">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <hr>
                                    <?php if ( function_exists( 'the_tags' ) ): ?>
                                        <strong>Tags: <?php the_tags( '', ', ', '' ); ?><br/></strong>
                                    <?php endif; ?>
                                </div>
                                <?php comments_template(); ?>
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
