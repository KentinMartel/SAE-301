<?php
get_header(); ?>

<div class="match-container">

    <!-- Récupérer les informations du match -->
    <?php
    // Récupérer les champs ACF pour le match
    $date_time = get_field('date-heures'); // Date et heure du match
    $score_a = get_field('score-a'); // Score de l'équipe A
    $score_b = get_field('score-b'); // Score de l'équipe B
    $teams = get_field('equipes'); // Équipes participantes (relation)

    if ($teams) {
        // Récupérer les noms des équipes
        $team_a = get_the_title($teams[0]->ID); // Nom de l'équipe A
        $team_b = get_the_title($teams[1]->ID); // Nom de l'équipe B
        
        // Récupérer les logos des équipes
        $team_a_logo = get_field('logo', $teams[0]->ID); // Logo équipe A
        $team_b_logo = get_field('logo', $teams[1]->ID); // Logo équipe B
    }

    // Déterminer l'équipe gagnante
    $winner = ($score_a > $score_b) ? $team_a : ($score_b > $score_a ? $team_b : null);

    // Afficher les détails du match
    ?>
    <div class="score-header">
        <div class="score-card">
            <span class="score"><?php echo esc_html($score_a); ?></span>
            <span class="score"><?php echo esc_html($score_b); ?></span>
        </div>
    </div>

    <!-- Afficher les équipes et mettre en orange l'équipe gagnante -->
    <div class="team-info">
        <div class="team <?php echo ($winner === $team_a) ? 'winner' : ''; ?>">
            <img src="<?php echo esc_url(wp_get_attachment_url($team_a_logo)); ?>" alt="<?php echo esc_attr($team_a); ?> Logo" class="team-logo">
            <h3><?php echo esc_html($team_a); ?></h3>
        </div>
        <div class="team <?php echo ($winner === $team_b) ? 'winner' : ''; ?>">
            <img src="<?php echo esc_url(wp_get_attachment_url($team_b_logo)); ?>" alt="<?php echo esc_attr($team_b); ?> Logo" class="team-logo">
            <h3><?php echo esc_html($team_b); ?></h3>
        </div>
    </div>

    <!-- Afficher la date du match -->
    <div class="match-details">
        <p><strong>Date :</strong> <?php echo date('d/m/Y H:i', strtotime($date_time)); ?></p>
    </div>

    <!-- Afficher les membres des équipes -->
    <div class="team-members">
        <h3>Membres des équipes</h3>
        <div class="team-member-group">
            <div class="team">
                <h3><?php echo esc_html($team_a); ?></h3>
                <ul class="membres-list">
                    <?php
                    // Récupérer et afficher les membres de l'équipe A (6 joueurs)
                    for ($i = 1; $i <= 6; $i++) {
                        $membre_a = get_field("joueurs-" . $i, $teams[0]->ID); // Champ ACF pour les joueurs
                        if ($membre_a) {
                            // Afficher les noms des joueurs
                            $user_name = get_the_author_meta('display_name', $membre_a);
                            echo '<li>' . esc_html($user_name) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="team">
                <h3><?php echo esc_html($team_b); ?></h3>
                <ul class="membres-list">
                    <?php
                    // Récupérer et afficher les membres de l'équipe B (6 joueurs)
                    for ($i = 1; $i <= 6; $i++) {
                        $membre_b = get_field("joueurs-" . $i, $teams[1]->ID); // Champ ACF pour les joueurs
                        if ($membre_b) {
                            // Afficher les noms des joueurs
                            $user_name = get_the_author_meta('display_name', $membre_b);
                            echo '<li>' . esc_html($user_name) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

  

<?php get_footer(); ?>
