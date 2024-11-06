<?php
get_header(); ?>

<div class="equipe-container">
    <!-- Flèche de retour vers la page de l'équipe -->
    <a href="<?php echo get_permalink( get_page_by_path( 'equipes' ) ); ?>" class="back-button">
         RETOUR AUX ÉQUIPES
    </a>

    <h1><?php the_title(); ?></h1>

    <!-- Récupérer les champs ACF pour l'équipe -->
    <?php
    $logo = get_field('logo'); // Champ pour le logo
    $victoires = get_field('victoires'); // Victoires
    $defaites = get_field('defaites'); // Défaites
    $points = get_field('points'); // Points

    // Afficher les informations de l'équipe
    if ($logo) {
        echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '">';
    }
    echo '<p>Victoires : ' . esc_html($victoires) . '</p>';
    echo '<p>Défaites : ' . esc_html($defaites) . '</p>';
    echo '<p>Points : ' . esc_html($points) . '</p>';

    // Joueurs
    echo '<h2>JOUEURS</h2>';
    $membres = [
        get_field("joueurs-1"),
        get_field("joueurs-2"),
        get_field("joueurs-3"),
        get_field("joueurs-4"),
        get_field("joueurs-5"),
        get_field("joueurs-6"), // Ajoute ce champ pour le 6ème joueur
    ];

    echo '<div class="joueurs-cards">';
    global $wpdb;
    foreach ($membres as $membre_id) {
        if ($membre_id) {
            $user_name = $wpdb->get_var($wpdb->prepare("
                SELECT display_name 
                FROM {$wpdb->users}
                WHERE ID = %d
            ", $membre_id));
            if ($user_name) {
                echo '<div class="joueur-card">';
                echo '<p>' . esc_html(strtoupper($user_name)) . '</p>'; // Affiche le pseudo en majuscule
                echo '</div>';
            }
        }
    }
    echo '</div>'; // Fermeture des cartes de joueurs

    // Matchs associés
    $match_ids = get_field('matchs-selon-equipe'); // Récupérer les IDs des matchs
    if ($match_ids) {
        echo '<h2>MATCHS</h2>';
        echo '<ul class="match-list">';
        
        foreach ($match_ids as $match_id) {
            $match = get_post($match_id); // Obtenir l'objet du match
            $score_a = get_field('score-a', $match_id); // Récupérer le score de l'équipe A
            $score_b = get_field('score-b', $match_id); // Récupérer le score de l'équipe B
            $date_time = get_field('date-heures', $match_id); // Récupérer la date/heure du match
            
            // Afficher chaque match avec un lien vers la page unique
            ?>
            <li class="match-item">
                <a href="<?php echo esc_url(get_permalink($match_id)); ?>">
                    <h3><?php echo esc_html($match->post_title); ?></h3>
                    <p>Score : <?php echo esc_html($score_a); ?> - <?php echo esc_html($score_b); ?></p>
                </a>
            </li>
            <?php
        }
        echo '</ul>';
    } else {
        echo '<p>Aucun match joué par cette équipe.</p>';
    }
    ?>
</div>

<?php get_footer(); ?>
