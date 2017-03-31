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
    <!--- container 20 px --->



    <article id="accueil"> <!-- Première page du site -->
      <h1>Bienvenue chez Wisna !</h1> <!-- Messade d'accueil -->
        <div class="logo_wisna">
          <img src="images/logowisna_definitif.png" alt="Notre beau logo !" > <!-- insertion du logo Wisna sur la 1ère page -->
        </div>
          <div class="slogan">
            <h1>A la conquête du quotidien  !</h1> <!-- insertion du slogan en dessous du logo -->
          </div>
          <div class="bouton_entrer">
            <button type="button" class="btn btn-success btn-lg">Découvrez-nous ! </button>
          </div>
      </article>
<!-- Fin de la première page du site -->

      <article id="quiSommesNous"> <!-- Page Qui sommes nous -->
        <h1> Qui sommes-nous ? </h1>
        <h3> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
        <hr>
      </article>

      <article id="Wisna" > <!-- Wisna, son équipe, son histoire -->
        <h1> Wisna ! </h1>
          <h2> Le <strong>coeur</strong> de Wisna ! </h2>
            <div class="triforce">
              <img src="images/Triforce.png">
            </div><hr>
      </article>

      <article id="projets"> <!-- Projets de Wisna -->
        <h1> Nos Projets ! </h1>
        <table>
          <thead>
            <tr>
              <th>Contenu d'en-tête 1</th>
              <th>Contenu d'en-tête 2</th>
              <th>Contenu d'en-tête 3</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><img src="images/raspberry-pi-logo.png"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
                <td><img src="images/raspberry-pi-logo.png"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
                <td><img src="images/raspberry-pi-logo.png"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></td>
            </tr>
          </tbody>
        </table>
        <hr>
      </article>

      <article id="contact"> <!--- Formulaire de contact -->
        <h1> Pour nous contacter : </h1>
          <form method="post" action="index.php" >
            <label for="nom">Nom :</label><input type="text" name="nom" placeholder="nom"/><br/> <!--nom-->
            <label for="prenom">Prénom :</label><input type="text" name="prenom" placeholder="prenom"/><br/> <!--prenom -->
            <label for="mail">Mail :<span style="color:#ff0000;">*</span></label><input type="text" name="email" placeholder="mail"/><br/> <!--Adresse mail -->
            <label for="phone">Téléphone :</label><input type="text" name="phone" placeholder="N° de téléphone"/><br/> <!--Phone -->
            <label for="message">Message :<span style="color:#ff0000;">*</span></label><textarea id="message" name="message" placeholder="message" tabindex="4" cols="50" rows="8"></textarea><br/><!--commentaire -->
            <label for="captcha">Combien font 1+3:<span style="color:#ff0000;">*</span></label><input type="text" name="captcha" size="2" /><br/> <!--- Captcha -->
            <label for="submit"></label><input type="submit" name="formulaire" placeholder="envoyer"/><br/>


            <?php
            // S'il y des données de postées
            if ($_SERVER['REQUEST_METHOD']=='POST') {
              // Code PHP pour traiter l'envoi de l'email

              $nombreErreur = 0; // Variable qui compte le nombre d'erreur
              // Définit toutes les erreurs possibles
              if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
                $nombreErreur++; // On incrémente la variable qui compte les erreurs
                $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
                } else { // Sinon, cela signifie que la variable existe (c'est normal)
                  if (empty($_POST['email'])) { // Si la variable est vide
                  $nombreErreur++; // On incrémente la variable qui compte les erreurs
                  $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
                } else {
                  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $nombreErreur++; // On incrémente la variable qui compte les erreurs
                    $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
                  }
                }
              }

              if (!isset($_POST['message'])) {
                $nombreErreur++;
                $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
              } else {
                if (empty($_POST['message'])) {
                  $nombreErreur++;
                  $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
                }
              }

              if (!isset($_POST['captcha'])) {
                $nombreErreur++;
                $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
              } else {
                if ($_POST['captcha']!=4) {
                  // Vérifier que le résultat de l'équation est égal à 4
                  $nombreErreur++;
                  $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
                }
              }
              if ($nombreErreur==0) { // S'il n'y a pas d'erreur
                echo '<div style="border:1px solid #22B207; padding:5px;">';
                echo '<p style="color:#22B207;"> Votre mail à bien été envoyé à notre équipe ! </p>';
              } else { // S'il y a un moins une erreur
                echo '<div style="border:1px solid #ff0000; padding:5px;">';
                echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
                if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
                if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
                if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
                if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
                if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
                if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
                if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
                  }
              }
            ?>
      </form>
    </article>

    <article id="partenaires" > <!-- Mentionner les partenaires -->
      <h1> Partenaires de Wisna ! </h1>
          <h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </h2>
          <div class="row">
            <div class="col-md-3"><img src="images/logo-granville.jpg"></div>
            <div class="col-md-3"><img src="images/logo_region_normandie.jpg"></div>
            <div class="col-md-3"><img src="images/logo_telethon.jpg"></div>
            <div class="col-md-3"><img src="images/credit_agricole_normandie.jpg"></div>
          </div><hr>
    </article>

    <footer>
      <?php include ("footer.php") ?>
    </footer>
  </body>

</html>
