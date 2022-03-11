<footer>
    <div class="fixed-bottom">
        <div class="footer-container">
            <?php wp_nav_menu (
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' =>  'footer-bar'
                )

            );?>
        </div>
    </div>
</footer>

<? php wp_footer();?>