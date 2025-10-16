<html>
<!-- en-tete technique-->
<head>
<title>Liste electorales</title>
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
$total=$_POST["total";]


if($couleur  == "couleur1") {
    $total = $total + (30+40);
    echo r  
} else {
    $total = $total +(30+10);
        echo "montant erreur";
}
?>

</body>
</html>