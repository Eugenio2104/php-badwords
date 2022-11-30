<?php
$insulto = $_POST['insulto'];
$paragrafo =$_POST['paragrafo']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">

    
      <h1>L'insulto che hai scritto è: <?php echo $insulto ?></h1>

      <p><?php echo $paragrafo?></p>
      <h2>lunghezza paragrafo <?php echo strlen($paragrafo)?></h2>


      <h2>censuriamo l'insulto</h2>
      <p><?php echo str_replace($insulto, '***', $paragrafo)?></p>


      <?php echo $paragrafo_esploso = explode(' ', $paragrafo ) ?>
 

      <?php var_dump( $paragrafo_esploso) ?>


    </div>
  </div>
</body>
</html>