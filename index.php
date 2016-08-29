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
            <div class="mdl-textfield mdl-js-textfield">
               <input class="mdl-textfield__input" type="text" id="text1">
               <label class="mdl-textfield__label" for="email">Email</label>
            </div>
            
            <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" id="text1" cols="30" rows="10"></textarea>
               <label class="mdl-textfield__label" for="email">Message...</label>
            </div>
            
            <input type="submit" value="Envoyer" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        </form>
        
        
    </section>
</body>
</html>