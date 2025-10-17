<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=<, initial-scale=1.0">
        <title>Document</title>
        <?php wp_head(); ?>
    </head>
        <body>
            <header>
                <div class="logo">
                    <h1>Mi Tema</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
                </div>
 
                <?php
                    $arg = array(
                        'theme_location' => 'main_menu',
                        'container' => 'nav',
                        'container_class' => 'main_nav',
                        'menu_class' => 'menu'
                    );
                    wp_nav_menu($arg);
                ?>
            </header>
            <main>
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <h2><?php the_title(); ?></h2>
                            <div><?php the_content(); ?></div>
                            <?php
                        }
                    } else {
                        ?>
                        <p>No se encontraron posts.</p>
                        <?php
                    }
                ?>
            </main>
            <footer>
                <p>ESTE ES EL FOOTER</p>
            </footer>
            <?php wp_footer(); ?>
        </body>
</html>