<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include ("head.php") ?>
  </head>

  <body>
    <header>
    </header>
    <nav>
      <?php include ("nav.php") ?>
    </nav>

    <article id="accueil">
      <h1>Bienvenue chez Wisna !</h1>
      <h1>A la conquête du quotidien  !</h1>
        <div class="logo_wisna">
          <img href="Qui_sommes_nous.php"src="logowisna_definitif.png" alt="Notre beau logo !" ><hr>
        </div>
      </article>

      <article id="quiSommesNous">
        <hr>
      </article>

      <article id="Wisna" >
        <h1> Wisna ! </h1>
        <h2> Voici la Triforce de Wisna ! </h2>
        <img src="Triforce.png">
        <hr>
      </article>

      <article id="projets">
        <h1> Nos Projets ! </h1>
        <hr>
      </article>

      <article id="contact">
        <h1> Pour nous contacter : </h1>
          <form method="post" action="contact.php" >
            <label for="nom"></label><input type="text" name="nom" placeholder="nom"/><br> <!--nom-->
            <label for="prenom"></label><input type="text" name="prenom" placeholder="prenom"/><br> <!--prenom -->
            <label for="mail"></label><input type="text" name="mail" placeholder="mail"/><br> <!--Adresse mail -->
            <label for="phone"></label><input type="text" name="phone" placeholder="N° de téléphone"/><br> <!--Phone -->
            <label for="commentaires"></label><input type="text" name="commentaires" placeholder="commentaires"/><br> <!--commentaire -->
            <label for="submit"></label><input type="submit" name="formulaire" placeholder="envoyer"/><br>
      </article>

    <footer>
    </footer>
  </body>

</html>
