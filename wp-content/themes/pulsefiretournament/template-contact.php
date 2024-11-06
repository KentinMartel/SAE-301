<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="contact-form-container" style="max-width: 800px; margin: 0 auto; padding: 20px;">
    <h1>Formulaire de Contact</h1>
    <p>Si vous avez des questions, n'hésitez pas à nous contacter en remplissant le formulaire ci-dessous.</p>

    <form action="/votre-script-de-traitement" method="POST" class="contact-form">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Envoyer</button>
    </form>
</div>

<?php get_footer(); ?>
