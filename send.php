<?php
    if (isset($_POST['email']) && isset($_POST['obj'])&& isset($_POST['mess'])) {
        mail($_POST['email'], $_POST['obj'], $_POST['mess']);
        echo "Message envoyé avec succès !";
    } else {
        echo "<p>Le message n'a pas été envoyé.</p>";
    }
?>