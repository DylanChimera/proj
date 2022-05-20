<?php 
    session_start();
    $login=$_POST["login"];
    $pass=$_POST["pass"];
    $valider=$_POST["valider"];
    $erreur="";
    if(isset($_valider)){
          if ($login=="user@gmail.com" && $pass=="123"){
              $_SESSION["autoriser"]="oui";  //test avant le fichier json
              header("location:index.php");
          }
        else{
            $erreur="Mauvais login ou mot de passe";
        }

    }
 ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php include('./header.php') ?>
    

    <section>
        <div class="formul">
        <form method="post" action="" class="form-horizontal">
            <h1> Connexion / Inscription </h1>
            <div class="inputs">
                <input type="email" placeholder="E-mail" name="login">
            </div>
            <div class="inputs">
                <input type="password" placeholder="Mot de passe" name="pass">
            </div>
            <div align="center">
                <button type="submit" name="valider">Se connecter</button>
            </div>
            <p class="choix"> Pas de compte, créez votre compte en un seul clic </p>
            <div align="center" class="inscription">
                <button type="submit" formaction="inscription.php"  > S'inscrire </button>
            </div>

        </form>
        </div>
</section>
</div>
        <?php include('./footer.php') ?>
        <script src="./js/script.js"></script>
</body>

</html>