<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<meta charset="utf-8">
<?php
$bdd = new PDO('mysql:host=localhost;dbname=foot', 'root', '');
$queryrole = $bdd->query("SELECT * FROM roles");

?>

  
    <select id="trucbidule" class="trucbidule">
      <?php
      while($row=$queryrole->fetch(PDO::FETCH_OBJ)){
        ?>
        <option ><?php echo $row->abreviation; ?></option>
        <?php
      }
      ?>
    </select>
    <div></div>

    <div id="result">
  </div>
  
  <script>
      var role=document.getElementById('trucbidule').value;
      $(document).ready(function(){
    $("select.trucbidule").change(function(){
        var langage = $(this).children("option:selected").val();
        role= langage

        $.ajax({
        type: "POST",
        url: "script.php",
        data: { name: role }
      }).done(function( msg ) {
        $("#result").html( msg );
      });
      });

     });
  </script>