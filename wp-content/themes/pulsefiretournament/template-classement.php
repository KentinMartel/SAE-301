<?php
/* Template Name: Classement */

get_header(); ?>

<div class="classement-container">
    <h1>CLASSEMENT</h1>

    <table class="classement-table">
        <thead>
            <tr>
                <th>RANG</th>
                <th>ÉQUIPE</th>
                <th>POINTS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Arguments pour récupérer toutes les équipes, triées par le champ "points" de façon décroissante
            $args = array(
                'post_type' => 'equipes', // Le type de publication des équipes
                'posts_per_page' => -1,   // Afficher toutes les équipes
                'meta_key' => 'points',   // Le champ ACF pour le tri
                'orderby' => 'meta_value_num', // Trier par la valeur numérique du champ
                'order' => 'DESC',        // Ordre décroissant
            );

            // La requête
            $equipe_query = new WP_Query($args);
            $rank = 1; // Initialiser le classement

            if ($equipe_query->have_posts()) :
                while ($equipe_query->have_posts()) : $equipe_query->the_post();
                    $logo_id = get_field('logo'); 
                    $points = get_field('points'); // Récupérer le nombre de points

                    // Afficher les informations de l'équipe dans le tableau
                    ?>
                    <tr>
                        <td><?php echo esc_html($rank); ?></td>
                        <td>
                            <div class="team-info">
                                <?php if ($logo_id): ?>
                                    <div class="logo-container">
                                        <?php echo wp_get_attachment_image($logo_id, 'thumbnail', false, ['class' => 'equipe-logo', 'alt' => get_the_title() . ' Logo']); ?>
                                    </div>
                                <?php else: ?>
                                    <p><?php the_title(); ?></p>
                                <?php endif; ?>
                                <p><?php the_title(); ?></p>
                            </div>
                        </td>
                        <td><?php echo esc_html($points); ?></td>
                    </tr>
                    <?php
                    $rank++; // Incrémenter le rang
                endwhile;
            else :
                echo '<tr><td colspan="3">Aucune équipe à afficher.</td></tr>';
            endif;

            // Réinitialiser la requête
            wp_reset_postdata();
            ?>
        </tbody>
    </table>
</div>

<?php get_footer(); ?>
