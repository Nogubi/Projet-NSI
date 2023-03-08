
<?php

$fp=fopen("data.txt","a");
$nom=$_POST["nom"];
$desc=$_POST["desc"];
$lieu=$_POST["lieu"];
$fichier_photo="Photos-objets/";
$nom_fichier=$fichier_photo.date("y-m-d").date("h-i").".".pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
move_uploaded_file($_FILES["photo"]["tmp_name"],$nom_fichier);
fwrite($fp,$nom);
fwrite($fp,"\n");
fwrite($fp,$desc);
fwrite($fp,"\n");
fwrite($fp,$lieu);
fwrite($fp,"\n");
fwrite($fp,$nom_fichier);
fwrite($fp,"\n");
print_r($_FILES);
?>

move_uploaded_file($_FILES["photo"]["tmp_name"],$nom_fichier);
fwrite($fp,$nom);
fwrite($fp,"\n");
fwrite($fp,$desc);
fwrite($fp,"\n");
fwrite($fp,$lieu);
fwrite($fp,"\n");
fwrite($fp,$nom_fichier);
fwrite($fp,"\n");
print_r($_FILES);
?>

