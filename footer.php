
    <footer class="footer">
        <div class="footer__container container">
            <div class="footer__col-1">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
                <span class="footer__copyright">© 2018–2022 ООО «К-Телеком»</span>
            </div>
            <div class="footer__col-2">
                <div class="footer__social">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/social/inst.svg'?>" alt="Instagram">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/social/youtube.svg'?>" alt="Youtube">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/social/vk.svg'?>" alt="vk">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>