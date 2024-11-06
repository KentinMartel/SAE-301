<footer class="site-footer">
    <!-- Logo centré dans le footer -->
    <div class="footer-content">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo PulseFire" class="footer-logo">
    </div>

    <!-- Texte Copyright -->
    <div class="footer-content">
        <p class="footer-text">©2024 PulseFire</p>
    </div>

    <!-- Réseaux sociaux -->
    <div class="footer-content">
        <div class="social-links">
            <a href="https://www.instagram.com/pulsefire" target="_blank">Instagram</a>
            <a href="https://twitter.com/pulsefire" target="_blank">Twitter</a>
            <a href="https://www.youtube.com/pulsefire" target="_blank">YouTube</a>
            <a href="https://discord.gg/pulsefire" target="_blank">Discord</a>
        </div>
    </div>

    <!-- Menu footer -->
    <div class="footer-content">
        <ul class="footer-menu">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class'     => '',
                'container'      => false,
                'items_wrap'     => '%3$s', // Éviter d'encapsuler dans un <ul>
            ));
            ?>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
