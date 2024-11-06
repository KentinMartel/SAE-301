<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <!-- Menu burger à gauche (mobile) -->
    <div class="menu-burger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Logo centré -->
    <div class="header-logo">
        <a href="<?php echo home_url('/accueil'); ?>"> <!-- Changer ici vers /accueil -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
        </a>
    </div>

    <!-- Icône de profil à droite -->
    <div class="profile-icon">
        <a href="<?php echo esc_url(home_url('/connexion')); ?>"> <!-- Changer ici vers /connexion -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/profile-icon.png" alt="Profil">
        </a>
    </div>

    <!-- Menu desktop -->
    <nav class="desktop-menu">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class'     => 'desktop-menu-items',
        )); 
        ?>
    </nav>
</header>

<!-- Overlay menu mobile -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-mobile">
    </div>

    <div class="mobile-menu-content">
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class'     => 'mobile-menu-items',
        )); 
        ?>
        <!-- Close button -->
        <button id="close-overlay" class="close-overlay">&#10005;</button>  <!-- Croisillon '×' -->
    </div>
</div>

<?php wp_body_open(); ?>

<!-- Scripts pour burger menu -->
<script>
// JavaScript pour gérer le menu burger et la croix de fermeture

const burgerMenu = document.querySelector('.menu-burger');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const closeOverlay = document.getElementById('close-overlay');

// Ouvre le menu en ajoutant la classe 'active' et bloque le scroll
burgerMenu.addEventListener('click', function() {
    mobileMenuOverlay.classList.add('active');
    document.body.classList.add('menu-open');  // Ajout de la classe pour bloquer le scroll
});

// Ferme le menu en retirant la classe 'active' et débloque le scroll
closeOverlay.addEventListener('click', function() {
    mobileMenuOverlay.classList.remove('active');
    document.body.classList.remove('menu-open');  // Retrait de la classe pour débloquer le scroll
});
</script>

<?php wp_footer(); ?>
</body>
</html>
