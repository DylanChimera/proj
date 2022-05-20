<?php 
    session_start();
    if(isset($_POST["Nom"]))
        $_SESSION["nom"] = $_POST["Nom"];
    if(isset($_POST["Prenom"]))
        $_SESSION["prenom"] = $_POST["Prenom"];
    if(isset($_POST["Email"]))
        $_SESSION["email"] = $_POST["Email"]
?>

<!DOCTYPE html >
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<?php include('./header.php') ?>

	<section class="en-tête">
		<h3>Inscrivez-vous</h3>
	</section>

	<section class="articles" id="articles">
		<div class="formulaire">
			<form method="post" action="./inscrit.php">
				<div class="input">
					<label for="nom">Nom* :</label>
					<input type="text" name="nom" id="nom" placeholder="Entrer votre nom" required />
				</div>
				<div class="input">
					<label for="prenom">Prenom* :</label>
					<input type="text" name="prenom" id="prenom" placeholder="Entrer votre prenom" required/>
				</div>
                <div class="input">
					<label for="birth">Date de naissance :</label>
					<input type="date" name="birth" id="birth" placeholder="jj / mm / aaaa" />
				</div>
				<div class="input">
					<label for="email">Email* :</label>
					<input type="email" name="email" id="email" placeholder="mon.mail@exemple.com" required />
				</div>
                <div class="input">
					<label for="Cemail">Confirmer l'e-mail* :</label>
					<input type="email" name="Cemail" id="Cemail" placeholder="mon.mail@exemple.com" required/>
				</div>
                <div class="input">
					<label for="mdp">Mot de passe* :</label>
					<input type="text" name="mdp" id="mdp" placeholder="mot de passe" required />
				</div>
                <div class="input">
					<label for="Cmdp">Confirmer le mot de passe* :</label>
					<input type="text" name="Cmdp" id="Cmdp" placeholder="mot de passe" required />
				</div>
                <div class="input">
                    <a> ( *Champs obligatoire )</a>
				</div>

                <div class="input submit">
					<input type="submit" name= "formsend" id="formsend" value ="S'inscrire">
				</div>
			</form>
		</div>
	</section>
	<?php
		if(isset($_POST['formsend'])){ 
		} 
	
	?>

	<footer>
		<?php include('./footer.php') ?> 
	</footer>
	<script src="./js/script.js"></script>
</body>

</body>
</html> 