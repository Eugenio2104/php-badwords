<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous">
  <title>PHP Badwords</title>
</head>
<body>


  
  <div class="container">
    <div class="row">
    <h1 class="mb-5">PHP Badwords</h1>
    <form action="./pagina-di-atterraggio.php" method="POST" class="d-flex flex-column">
      <input type="text" name="insulto" placeholder="scrivi la parola da censurare" >
      <textarea type="text" name="paragrafo" placeholder="scrivi un insulto con la parola da censurare"></textarea>
      <button type="submit">insulta</button>
    </form>
</div>
</div>

</body>
</html>