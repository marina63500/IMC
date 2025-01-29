<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="/asset/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<h1><?php echo "calculer votre IMC"?></h1>
 
<div class= "container">
  <form method="post" action="" class="formuler">
    <div>
      <label for="age">AGE :</label>
      <input type="number" id= "age" name="age" >
    </div>

    <div>
      <label for="taille">taille (cm):</label>
      <input type="number" name="taille" id="taille">
    </div>

    <div>
      <label for="poids">poids en(kg):</label>
      <input type="number" id="poids" name="poids">
    </div>

    <div>
      <button type="submit" >calculer</button>
    </div>

    
  </form>
  
</div>


<?php




if(isset($_POST["age"])&& isset($_POST["taille"])&& isset($_POST["poids"])){
 
  $name = $_POST["age"];
  $taille = $_POST["taille"];         //taille en m
  $poids = $_POST["poids"];          // poids en kg
  
  
$imc= ($poids/($taille * $taille))*10000;         // formule imc= (poids en kg) / (taille*taille)



echo "<p class='imc'> votre IMC est  de: " . number_format($imc, 1) . "</p>"; 


$typeImc = "";
if($imc <= 18.5){
  $typeImc = "vous êtes trop maigre";
} else if($imc>18.5 && $imc<25){
  $typeImc =  "vous avez une corpulence normale";
} else if($imc>18.5 && $imc<25){
  $typeImc = "vous avez une corpulence normale";
} else if($imc>=25 && $imc<30){
  $typeImc = "vous êtes en surpoids";
} else if($imc>=30 && $imc<35){
  $typeImc = "vous êtes en Obésité modérée";
} else if ($imc>=35 && $imc<40){
  $typeImc = "vous êtes en Obésité sévère";
} else{
  $typeImc ="vous êtes en Obésité morbide ou massive";
}     
    // echo  "<p class='imcstyle'>" . $typeImc . "</p>";
?>

<p class="imcstyle"><?php echo $typeImc ?></p>
<?php
}
 
?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>




<?php
