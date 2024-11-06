<?php
/* Template Name: equipes-all */

get_header();

// Vérifier si l'utilisateur est connecté
if (!is_user_logged_in()) {
    echo '<p>Vous devez être connecté pour créer une équipe.</p>';
    wp_login_form();
    get_footer();
    exit;
}

// Paramètres de la requête pour récupérer les équipes existantes
$args = array('post_type' => 'equipes');
$the_query = new WP_Query($args);

?>

<?php if ($the_query->have_posts()) : ?>
    <div class="toutes-les-equipes">
        <div class="equipes-part">
            <h2 class="title-part">ÉQUIPES</h2>
        </div>
        <div class="equipes-grid"> <!-- Conteneur pour la grille des équipes -->
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="equipe-card">
                    <?php 
                    $logo_id = get_field('logo'); 
                    if ($logo_id): 
                        echo wp_get_attachment_image($logo_id, 'thumbnail', false, ['class' => 'equipe-logo', 'alt' => get_the_title() . ' Logo']);
                    else: ?>
                        <p>Aucun logo défini pour cette équipe.</p>
                    <?php endif; ?>
                    <h3 class="equipe-title"><?php the_title(); ?></h3>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php else : ?>
    <p>Aucune équipe n'a été trouvée.</p>
<?php endif;?>

<div class="create-team-section">
    <button id="show-create-form" class="create-team-btn">CRÉER UNE ÉQUIPE</button>

    <div id="create-form" style="display: none;">
        <h2>Créer une équipe</h2>
        <form method="post" enctype="multipart/form-data">
            <?php wp_nonce_field('creer_equipe', 'creer_equipe_nonce'); ?>
            <p>
                <label for="nom_equipe">Nom de l'équipe :</label>
                <input type="text" id="nom_equipe" name="nom_equipe" required>
            </p>
            <p>
                <label for="image_equipe">Logo de l'équipe :</label>
                <input type="file" id="image_equipe" name="image_equipe">
            </p>
            <p>
                <label>Joueurs :</label><br>
                <?php
                $users = get_users();
                for ($i = 1; $i <= 6; $i++) {
                    echo '<select name="membre_' . $i . '" class="member-select" required>';
                    echo '<option value="">Sélectionner un membre</option>';
                    foreach ($users as $user) {
                        echo '<option value="' . esc_attr($user->ID) . '">' . esc_html($user->display_name) . '</option>';
                    }
                    echo '</select>';
                }
                ?>
            </p>
            <input type="submit" value="Créer l'équipe" class="create-team-submit">
        </form>
    </div>
</div>

<script>
document.getElementById('show-create-form').addEventListener('click', function () {
    var form = document.getElementById('create-form');
    form.style.display = (form.style.display === 'none') ? 'block' : 'none';
});
</script>

<?php
wp_reset_postdata();
get_footer();
?>
