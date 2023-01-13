<?php 
$name = $_POST['name'];

// Faire quelque chose avec les données
$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');
$queryrole = $bdd->prepare("SELECT * FROM joueurs where role=? and equipe=0");
$queryrole->execute(array($name));
?>
<table >
    <tr><th>nom</th><th>prenom</th><th>role</th><th>attaque</th><th>defense</th><th>gardien</th>
    
</tr>
    <?php
    while($rowrole=$queryrole->fetch(PDO::FETCH_OBJ)){
        $general=($rowrole->atk+$rowrole->def+$rowrole->gardien)/3;
        $general=intval($general);
    echo "<tr><td>".$rowrole->nom."</td>";
    echo "<td>".$rowrole->prenom."</td>";
    echo "<td>".$rowrole->role."</td>";
    echo "<td style='text-align: center;'>".$rowrole->atk."</td>";
    echo "<td 'text-align: center;'>".$rowrole->def."</td>";
    echo "<td 'text-align: center;'>".$rowrole->gardien."</td>";
    echo "<td 'text-align: center;'>".$general."</td>";
    ?>
<td>
    <form method="POST" action="recrute.php">
    <input type="text" name="nnn" value="<?php echo $rowrole->id;?>" hidden>
    <button type="submit" id="sub">Recruter</button>
    </form>
</td></tr>
    <?php
 }   
 ?>
</table>