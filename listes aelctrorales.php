<html>
<!-- en-tete technique-->
<head>
<title>Listes electorales</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="Grégoire Maréchal">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Contrôle</h4>


<?php
/* récupération des données postées dans le formulaire */
$couleur=$_POST["couleur"];
$soin=$_POST["soin";]

if($age >= "18") {
    echo "Vous pouvez vous inscrire";  
} else {
    echo "Vous ne pouvez pas vous inscrire";
}

?>

</body>
</html>