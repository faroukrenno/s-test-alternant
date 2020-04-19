<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
  <script defer src="script.js"></script>
  <title>Quiz App</title>
</head>
<body>

  <?php
    if (isset($_POST['login']) AND isset($_POST['mot_de_passe']) AND $_POST['login'] == "study" AND $_POST['mot_de_passe'] == "advisor") // Si le login et le mot de passe sont corrects
    {
    // On donne accès au quiz
    ?>
        <div class="container">
    <div id="question-container" class="hide">
      <div id="question">Question</div>
      <div id="answer-buttons" class="btn-grid">
        <button class="btn">Answer 1</button>
        <button class="btn">Answer 2</button>
        <button class="btn">Answer 3</button>
        <button class="btn">Answer 4</button>
      </div>
    </div>
    <div class="controls">
      <button id="start-btn" class="start-btn btn">Start</button>
      <button id="next-btn" class="next-btn btn hide">Next</button>
    </div>
  </div>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect ! </p> <p> <a class="reset" href="index.php"> Réessayer</a> </p>';
    }
    ?>

  
</body>
</html>