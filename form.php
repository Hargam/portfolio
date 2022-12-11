<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <section id="formu">
        <h2>Me contacter</h2>
        <form method="post">
            <label for="name"><input id="name" type="text" name="name" placeholder="Votre nom" required></label>
            <label for="mail"><input id="mail" type="email" name="email" placeholder="Email" required></label>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <input type="submit">
        </form>
    </section>
    <?php
    if (isset($_POST['message'])) {

        $message = '<h1>Message envoyé depuis la page Contact de hargam.fr</h1>
        <p>
            <b>Email : </b>' . $_POST['email'] . '<br>
            <b>Message : </b>' . ($_POST['message']) . '
        </p>';

        $retour = mail('webdev@hargam.fr', 'Envoie depuis la page contact de hargam.fr', $message, 'From: skull.gl82@gmail.com' . "\r\n") . 'Reply-to: ' . $_POST['email'];
        if ($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>

</html>