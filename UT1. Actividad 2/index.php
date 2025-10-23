<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=<, initial-scale=1.0">
        <title>Document</title>
        <?php wp_head(); ?>
    </head>
        <body>
                <header class="site-header">
                    <div class="logo">
                        <h1>Noticias Pablo Tejeda</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
                    </div>

                    <nav class="main_nav">
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </nav>

                    <?php
                        $arg = array(
                            'theme_location' => 'main_menu',
                            'container' => 'nav',
                            'container_class' => 'main_nav',
                            'menu_class' => 'menu'
                        );
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
                    <p>No posts found.</p>
                    <?php
                }
                ?>
            </main>
        </body>

        <?php 
            get_footer(); 
        ?>

</html>