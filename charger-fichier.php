<?php
$monFichier = fopen("mon-fichier.txt", "r");
$contenu = fread($monFichier, filesize("mon-fichier.txt"));
fclose($monFichier);
echo "$contenu";
?>