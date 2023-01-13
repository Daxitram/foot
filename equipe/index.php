<!DOCTYPE html>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
	$equipe=1;
	$reqclub=$bdd->prepare("SELECT * FROM equipes where id=?");
	$reqclub->execute(array($equipe));
	$rwoclub=$reqclub->fetch(PDO::FETCH_OBJ);
echo "<h1>".$rwoclub->nom."</h1>";
echo "<p>".$rwoclub->nbrejoueurs." joueurs</p>";
	?>
	<table >
    <tr><th>nom</th><th>prenom</th><th>role</th><th>attaque</th><th>defense</th><th>gardien</th>
    
</tr>
	<?php
	$reqequipe=$bdd->prepare("SELECT * FROM joueurs where equipe=?");
	$reqequipe->execute(array($equipe));
	while($rowequipe=$reqequipe->fetch(PDO::FETCH_OBJ)){
		$general=($rowequipe->atk+$rowequipe->def+$rowequipe->gardien)/3;
        $general=intval($general);
    echo "<tr><td>".$rowequipe->nom."</td><td>".$rowequipe->prenom."</td><td>".$rowequipe->role."</td><td style='text-align: center;'>".$rowequipe->atk."</td><td 'text-align: center;'>".$rowequipe->def."</td><td 'text-align: center;'>".$rowequipe->gardien."</td><td 'text-align: center;'>".$general."</td></tr>";
	}
	?>
</body>
</html>