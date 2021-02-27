<?php
$fi=fopen("Correos/Text.txt","a");
or die("Problemas al crear archivo");
fwrite($fi, "Correos Electronicos");
fwrite($fi, "\n");
fwrite($fi, $_POST['name]);
fwrite($fi, "\n");
fwrite($fi, "-------------------------\n\n");
fclose($fi);
echo "Datos guardados con exito"

 ?>
