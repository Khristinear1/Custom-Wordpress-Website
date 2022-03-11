<!DOCTYPE html>
<html>
    <head>

        <?php wp_head();?>
    
    </head>


    <body <?php body_class();?>>

        <header class="sticky-top">
            
            <div class="container">
                <div class="custom-logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="custom_menu">
                    <?php wp_nav_menu (
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' =>  'navigation'
                        )

                    );?>
                </div>
            </div>

        </header>

        <header class="subheader"> 
        </header>
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'top-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
            </div>
        </nav>


    </body>

