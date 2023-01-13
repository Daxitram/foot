
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  
<p>Détection du déplacement et de sa fin. (Déplacer l'image)</p>
<p id="info"></p>
<div style="display: flex; ">
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');
    $equipe=1;
    $queryimg=$bdd->prepare("SELECT * FROM `joueurs` where equipe=? order by id asc ");
    $queryimg->execute(array($equipe));
    while($row=$queryimg->fetch(PDO::FETCH_OBJ)){
        ?>
        <img id="<?php echo "test".$row->id; ?>" src="<?php echo "images/".$row->image; ?>" draggable="true" width="191" height="191">
        <?php
    }
    ?>
<img id="image1" src="test.png" draggable="true" width="191" height="191">
<img id="image2" src="test.png" draggable="true" width="191" height="191">
<div id="cible" align="center"></div>
</div>
<div style="background-image: url(bgfoot.png); background-repeat: no-repeat; background-size: 100%;" class="container">
<div style="display: flex;justify-content: space-between;">
<div id="cible1" align="center"></div>
<div id="cible2" align="center"></div>
<div id="cible3" align="center"></div>
</div>
<br><br>
<div style="display: flex;justify-content: space-between;">
<div id="cible4" align="center"></div>
<div id="cible5" align="center"></div>
<div id="cible6" align="center"></div>
</div>
<br><br>
<div style="display: flex;justify-content: space-between;">
<div id="cible7" align="center"></div>
<div id="cible8" align="center"></div>
<div id="cible9" align="center"></div>
<div id="cible10" align="center"></div>
</div>
<br><br>
<div align="center">
<div id="cible11"></div>
</div>

</div>
<style type="text/css">
    #cible {width:200px;height:200px;border:5px solid red;}
    #cible1 {width:200px;height:200px;border:5px solid red;}
    #cible2 {width:200px;height:200px;border:5px solid red;}
    #cible3 {width:200px;height:200px;border:5px solid red;}
    #cible4 {width:200px;height:200px;border:5px solid red;}
    #cible5 {width:200px;height:200px;border:5px solid red;}
    #cible6 {width:200px;height:200px;border:5px solid red;}
    #cible7 {width:200px;height:200px;border:5px solid red;}
    #cible8 {width:200px;height:200px;border:5px solid red;}
    #cible9 {width:200px;height:200px;border:5px solid red;}
    #cible10 {width:200px;height:200px;border:5px solid red;}
    #cible11 {width:200px;height:200px;border:5px solid red;}
</style>

<script>
    <?php 
    $queryimg2=$bdd->prepare("SELECT * FROM `joueurs` where equipe=? order by id asc ");
    $queryimg2->execute(array($equipe));
    while($row2=$queryimg2->fetch(PDO::FETCH_OBJ)){
        ?>
                    var imagea<?php echo $row2->id;?> = document.getElementById("<?php echo "test".$row2->id;?>")
                imagea<?php echo $row2->id;?>.addEventListener('dragstart',fonction_dragstart,false);
                imagea<?php echo $row2->id;?>.addEventListener('dragend',fonction_dragend,false);


        <?php
    }
        ?>
    var image =    document.getElementById('image1')
    image.addEventListener('dragstart',fonction_dragstart,false);
    image.addEventListener('dragend',fonction_dragend,false);  
    var image2 =    document.getElementById('image2')
    image2.addEventListener('dragstart',fonction_dragstart,false);
    image2.addEventListener('dragend',fonction_dragend,false);
    function fonction_dragend(ev){
        ev.preventDefault();
        var id = ev.target.id;
        document.getElementById('info').innerHTML="fin de déplacement de "+id;
        /* remettre les valeurs initiales de transparence, supprimer le cadre */
        this.style.opacity=1;
        this.style.borderStyle='none';
    }
    
    function fonction_dragstart(ev){
        var id = ev.target.id;
        document.getElementById('info').innerHTML="déplacement de "+id;
        /* changer transparence de l'élément, ajouter un cadre */
        this.style.opacity=0.2;
        this.style.borderStyle='dashed';
        ev.dataTransfer.setData("Text",ev.target.id);
    }    

    var cible =    document.getElementById('cible')
    cible.addEventListener('dragover',fonction_dragover,false);
    cible.addEventListener('drop',fonction_drop,false);

    var cible1 =    document.getElementById('cible1')
    cible1.addEventListener('dragover',fonction_dragover,false);
    cible1.addEventListener('drop',fonction_drop,false);

    var cible2 =    document.getElementById('cible2')
    cible2.addEventListener('dragover',fonction_dragover,false);
    cible2.addEventListener('drop',fonction_drop,false);

    var cible3 =    document.getElementById('cible3')
    cible3.addEventListener('dragover',fonction_dragover,false);
    cible3.addEventListener('drop',fonction_drop,false);

     var cible4 =    document.getElementById('cible4')
    cible4.addEventListener('dragover',fonction_dragover,false);
    cible4.addEventListener('drop',fonction_drop,false);

     var cible5 =    document.getElementById('cible5')
    cible5.addEventListener('dragover',fonction_dragover,false);
    cible5.addEventListener('drop',fonction_drop,false);

     var cible6 =    document.getElementById('cible6')
    cible6.addEventListener('dragover',fonction_dragover,false);
    cible6.addEventListener('drop',fonction_drop,false);

    var cible7 =    document.getElementById('cible7')
    cible7.addEventListener('dragover',fonction_dragover,false);
    cible7.addEventListener('drop',fonction_drop,false);

    var cible8 =    document.getElementById('cible8')
    cible8.addEventListener('dragover',fonction_dragover,false);
    cible8.addEventListener('drop',fonction_drop,false);

     var cible9 =    document.getElementById('cible9')
    cible9.addEventListener('dragover',fonction_dragover,false);
    cible9.addEventListener('drop',fonction_drop,false);

     var cible10 =    document.getElementById('cible10')
    cible10.addEventListener('dragover',fonction_dragover,false);
    cible10.addEventListener('drop',fonction_drop,false);

     var cible11 =    document.getElementById('cible11')
    cible11.addEventListener('dragover',fonction_dragover,false);
    cible11.addEventListener('drop',fonction_drop,false);

    function fonction_dragover(ev){
        /* empêcher le fonctionnement par défaut */
        ev.preventDefault();
    }    
    function fonction_drop(ev){
        ev.preventDefault();
        /* récupération de l'identifiant de l'élément déplacé */
        var data=ev.dataTransfer.getData("Text");
        ev.target.appendChild(document.getElementById(data));
    }            
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>