<meta charset="utf-8">
<?php

$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');

$queryprenom=$bdd->query("SELECT * FROM prenom order by id asc");
$querynom=$bdd->query("SELECT * FROM nom order by id asc");
$nbrprenom=$queryprenom->rowCount();
$nbrnom=$querynom->rowCount();

?>
<style type="text/css">
.tftable {font-size:12px;color:#fbfbfb;width:100%;border-width: 1px;border-color: #686767;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#171515;border-width: 1px;padding: 8px;border-style: solid;border-color: #686767;text-align:left;}
.tftable tr {background-color:#2f2f2f;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #686767;}
.tftable tr:hover {background-color:#171515;}
</style>

<table class="tftable" border="1">



<?php
//$reqajoute=$bdd->prepare("INSERT INTO joueurs (id, prenom, nom, role, general, vitesse, tir, passes, dribles, defense, physique)");
//gaucher ou droitier, stats mauvais pied, si gaucher sur aile gauche si droitier sur aile droite sauf si mauvais pied >=50

//vitesse = tout
//tir = attaquant
//passes = millieu / def
//dribles = millieu / buteur
//defense = defenseur / millieu def / goal
//pied = gauche ou droite 
//physique = tout
//mauvais pied >50 millieu / attaquant / denfenseur centre
//attaque = attaquant / millieu offensif
//
//pas obligé de mettre autant de stats
//au minimum 2 stats attaque et defense
// on peut ajouter le pied et mauvais pied pour définir les roles
// la stat gardien peut etre utile

//pour les match 
//l'idée est de mettre un score pour chaque équipe en fonction de la stat principal des joueurs titulaires
// ensuite quand deux équipes s'affrontent elles tirent au sort un nombre entre zéro leur score
// l'équipe avec le meilleur score à un léger avantage mais c'est normal 
// je vais essayer qu'en fonction de l'éccard de score soit cohérent avec les nombres aléatoires
// si une équipe qui a 1000 de score fait 500 et une autre qui 8 et fait 400 on ne veut pas voir 8-0
// ce serait plus 1-0, un éccard < 100 serait match nul 0-0 1-1 2-2 3-3
// >100 1-0
// >200 2-0
// >300 3-0
// >400 4-0
//if (1==1) { //switcher avec le for si besoin
for ($i=0; $i < 1000; $i++) { 
	



$defense=random_int(0,100);

$attaque=random_int(0,100);

$gardien=random_int(0,100);
$role="";
if($gardien>=90){
	$role="G";
}
if ($attaque>=66) {
	$role="BT";
}elseif($attaque>=50){
	$randa=random_int(0,2);
	switch ($randa) {
		case 0:
			$role="AA";
			break;
		case 1:
			$role="AD";
			break;
		case 2:
			$role="AG";
			break;
		default:
			break;
	}
}
if($attaque>=50 && $defense>=50){
	$randm=random_int(0,8);
	switch ($randm) {
		case 0:
			$role="MDG";
			break;
		case 1:
			$role="MDD";
			break;
		case 2:
			$role="MDC";
			break;
		case 3:
			$role="MG";
			break;
		case 4:
			$role="MD";
			break;
		case 5:
			$role="MC";
			break;
		case 6:
			$role="MOG";
			break;
		case 7:
			$role="MOD";
			break;
		case 8:
			$role="MOA";
			break;
		default:
			// code...
			break;
	}
}elseif($attaque<50 && $defense>=50){
	$randd=random_int(0,2);
	switch ($randd) {
		case 0:
			$role="DD";
			break;
		case 1:
			$role="DG";
			break;
		case 2:
			$role="DC";
			break;
		default:
			break;
	}
}

if($role==""){
	$role="R";
}


$randprenom=rand(1, $nbrprenom);
$randnom=rand(1, $nbrnom);

$reqprenom=$bdd->prepare("SELECT * FROM prenom where id=?");
$reqnom=$bdd->prepare("SELECT * FROM nom where id=?");
$reqprenom->execute(array($randprenom));
$reqnom->execute(array($randnom));

$rowprenom=$reqprenom->fetch(PDO::FETCH_OBJ);
$rownom=$reqnom->fetch(PDO::FETCH_OBJ);
echo "<tr>";
echo "<td>".strtoupper($rowprenom->prenom)."</td><td>".strtoupper($rownom->nom)."</td><td>".$role."</td>";
echo "<td>".$attaque."</td>";
echo "<td>".$defense."</td>";
echo "<td>".$gardien."</td>";
echo "</tr>";
$nomj=strtoupper($rownom->nom);
$prenomj=strtoupper($rowprenom->prenom);
$titreimg=$nomj.$prenomj.time().".png";
$im = @imagecreate(200, 110) or die("Impossible d'initialiser la bibliothèque GD");
$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 0, 0, 0);
//imagestring($image, "taille du texte", "position x", "position y", $texte, $noir);


$reqcrea=$bdd->prepare("INSERT INTO `joueurs` (`id`, `nom`, `prenom`, `role`, `atk`, `def`, `gardien`, `image`) VALUES (NULL, ?,?,?,?,?,?,?)");
$nommm=strtoupper($rownom->nom);
$prenommm=strtoupper($rowprenom->prenom);
$reqcrea->execute(array($nommm, $prenommm, $role, intval($attaque), intval($defense), intval($gardien), $titreimg));
if ($role=="G") {
	$attaque=$gardien." G";
}else{
	$attaque=$attaque." ATQ";
}

$defense=$defense." DEF";

imagestring($im, 12, 5, 10,  $nomj, $text_color);
imagestring($im, 12, 5, 30,  $prenomj, $text_color);
imagestring($im, 12, 5, 50,  $role, $text_color);
imagestring($im, 12, 5, 70,  $attaque, $text_color);
imagestring($im, 12, 5, 90,  $defense, $text_color);

imagepng($im, "images/".$titreimg);
imagedestroy($im);
}


//INSERT INTO `roles` (`id`, `role`, `abreviation`) VALUES (NULL, 'test1', 't1'), (NULL, 'test2', 't2');
?>
</table>