<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<div class="accueil">
    <div class="image-fond">
        <img src="imageaccueil.webp" alt="Image d'accueil">
    </div>
    <h1 class="titre-principal">PULSEFIRE<br>TOURNAMENT</h1>
    <h2 class="titre-sous-principal">OVERWATCH<br>OPEN QUALIFIER</h2>
    <div class="barre-container">
        <div class="barre"></div>
        <div class="barre"></div>
    </div>
</div>

    
    <!-- Fond image -->
    <div class="image-fond">
        <img src="<?php echo get_template_directory_uri(); ?>/images/imageaccueil.webp" alt="Image Accueil">
    </div>
</section>

<!-- Bienvenue et présentation -->
<section class="bienvenue">
    <h3 class="bienvenue-titre">BIENVENUE AU PULSEFIRE TOURNAMENT !</h3>
    <p class="bienvenue-texte">Rejoignez l'un des plus grands tournois Overwatch de l'année ! Le tournoi dure 8 jours les meilleures équipes s'affronteront pour la gloire, des prix exceptionnels, et bien sûr, le titre de champion. Préparez-vous pour des matchs d’anthologie, des actions épiques et une ambiance survoltée !</p>
</section>

<!-- Date du tournoi -->
<section class="date-tournoi">
    <h4 class="date-titre">DATE DU TOURNOI</h4>
    <div class="barre-souligne"></div>
    <p class="date-texte">Le tournoi se déroulera du 20 au 27 janvier 2025, Créez votre équipe de minimum 6 joueurs et tentez de décrocher la première place !</p>
</section>

<!-- Image personnage -->
<section class="image-personnage">
    <img src="<?php echo get_template_directory_uri(); ?>/images/tracer.webp" alt="Tracer" class="image-tracer">
</section>

<!-- Comment participer -->
<section class="participation">
    <h4 class="participation-titre">COMMENT PARTICIPER ?</h4>
    <ul class="participation-list">
        <li>1. Créer un compte</li>
        <li>2. Inscrivez-vous avec votre équipe dans la page équipes</li>
        <li>3. Consultez les règles du tournoi et le format des matchs</li>
        <li>4. Entraînez-vous et montrez votre talent !</li>
    </ul>
</section>

<!-- Bouton créer un compte -->
<section class="inscription-bouton">
    <a href="<?php echo home_url('/inscription'); ?>" class="btn-inscription">CREER UN COMPTE</a>
</section>

<?php get_footer(); ?>
