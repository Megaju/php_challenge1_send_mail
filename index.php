<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Mail - Challenge 01 PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
</head>
<body>
    <header>
        <h1 class="display-4">Send Mail</h1>
        <p>Votre boîte de messagerie fonctionnelle, classe et conviviale (ou aps...)</p>
    </header>
    
    <section>
        <form action="send.php" method="post" class="mdl-card__supporting-text">
            <!-- EMAIL -->
            <div class="mdl-textfield mdl-js-textfield">
                <label class="mdl-textfield__label" for="email">Email</label>
                <input class="mdl-textfield__input" type="text" id="email">
            </div>
            <!-- OBJET -->
            <div class="mdl-textfield mdl-js-textfield">
               <input class="mdl-textfield__input" type="text" id="obj">
               <label class="mdl-textfield__label" for="obj">Objet</label>
            </div>
            <!-- MESSAGE -->
            <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" id="mess" cols="30" rows="10"></textarea>
               <label class="mdl-textfield__label" for="mess">Message...</label>
            </div>
            <!-- ENVOYER -->
            <input type="submit" value="Envoyer" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        </form>
        
        
        
        
    </section>
</body>
</html>