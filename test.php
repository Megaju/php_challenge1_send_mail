<?php
$to = "julien_malle@outlook.fr";
$subject = "Sujet de test";
$txt = "Si tu reçoit ce message c'est que tu as réussi à utiliser la fonciton mail() de PHP !";
$headers = "From: julien_malle@outlook.fr";

mail($to,$subject,$txt,$headers);
?>