<?php
$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');
echo $_POST['nnn'];
$equipe=1;
$verif=$bdd->prepare("SELECT * FROM joueurs where id=?");
$verif->execute(array($_POST['nnn']));
$rowverif=$verif->fetch(PDO::FETCH_OBJ);
$forcejoueur=0;
if ($rowverif->role=="G") {
	$forcejoueur=$rowverif->gardien;
}elseif($rowverif->role=="BT" || $rowverif->role=="AA" || $rowverif->role=="AC" || $rowverif->role=="AG"){
	$forcejoueur=$rowverif->atk;
}elseif($rowverif->role=="MDG" || $rowverif->role=="MDD" || $rowverif->role=="MDC" || $rowverif->role=="MG" ||$rowverif->role=="MD" || $rowverif->role=="MC" || $rowverif->role=="MOG" || $rowverif->role=="MOD" || $rowverif->role=="MOA"){
	$forcejoueur=($rowverif->atk+$forcejoueur=$rowverif->def)/2;
	$forcejoueur=intval($forcejoueur);
}elseif($rowverif->role=="DC" || $rowverif->role=="DG" || $rowverif->role=="DD"){
	$forcejoueur=$rowverif->def;
}
if ($rowverif->equipe==0) {
	$recrute=$bdd->prepare("UPDATE joueurs SET equipe=? where id=?");
	$recrute->execute(array($equipe, $_POST['nnn']));
	$recupequipe=$bdd->prepare("SELECT * FROM equipes where id=?");
	$recupequipe->execute(array($equipe));
	$rowrecupequipe=$recupequipe->fetch(PDO::FETCH_OBJ);
	$nbrejoueurs=$rowrecupequipe->nbrejoueurs;
	$nbrejoueurs=$nbrejoueurs+1;
	$forceequipe=$rowrecupequipe->forceequipe;
	$forceequipe=$forceequipe+$forcejoueur;
	$upequipe=$bdd->prepare("UPDATE equipes SET nbrejoueurs=?, forceequipe=? where id=?");
	$upequipe->execute(array($nbrejoueurs, $forceequipe, $equipe));
	header("Location:../equipe/index.php");
}


?>