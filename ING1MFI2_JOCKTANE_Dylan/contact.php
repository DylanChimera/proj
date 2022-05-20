<!DOCTYPE html>
<html>
<?php include('header.php'); ?>

      <!-- <div class="haut-page"><a href="#">/\</a></div> -->

      <section id="articles">
        <h1>Contactez-nous</h1>
        <div class="formulaire">
          <form method="post" action="" id="form">
            <div class="input">
              <label for="nom">Nom :</label>
              <div class="pu"><input
                type="text"
                name="nom"
                id="nom"
                placeholder="Entrer votre nom"
              />
            
              <small>Format incorrect</small></div>
            </div>
            <div class="input">
              <label for="prenom">Prenom :</label>
              <div class="pu"><input
                type="text"
                name="prenom"
                id="prenom"
                placeholder="Entrer votre prenom"
              />
            
              <small>Format incorrect</small></div>
            </div>

            <div class="input">
              <label for="ndate">Date de naissance :</label>
              <div class="pu"><input type="date" name="ndate" id="ndate" />
              <small>Format incorrect</small></div>
            </div>
            <div class="input">
              <label for="email">E-mail :</label>
              <div class="pu"><input
                type="email"
                name="email"
                id="email"
                placeholder="mon.mail@exemple.com"
              />
            
              <small>Format incorrect</small></div>
            </div>

            <div class="radio input">
              <div>
                <div class="pu"><input type="radio" name="sexe" id="femme" />
                <label for="femme">Femme</label>
                <small>veuillez choisir un sexe</small></div>
              </div>
              
              <div>
                <div class="pu"><input type="radio" name="sexe" id="homme" />
                <label for="homme">Homme</label>
                <small>veuillez choisir un sexe</small></div>
              </div>

            
            </div>
            <select class="input" name="metier" id="metier">
              <option value="">--Please choose an option--</option>
              <option value="Enseignant">Enseignant</option>
              <option value="Etudiant">Etudiant</option>
              <option value="Hamster">Hamster ;)</option>
              <option value="Autre">Autre</option>
            </select>
        
            <div class="input">
              <label for="nom">Sujet :</label>
              <div class="pu"><input
                class="sujet"
                type="text"
                name="sujet"
                id="sujet"
                placeholder="Objet du mail"
              />
            
              <small>objet ne peut être vide</small></div>
            </div>
            <div class="input">
              <label for="commentaire">Commentaire :</label>
              <textarea
                class="sujet"
                name="commentaire"
                id="commentaire"
                cols="40"
                rows="15"
                placeholder="commentaire..."
              ></textarea>
            </div>
            
            <div class="input submit">
              <a onclick="checkInputs()">Envoyer</a>
              <!--<div class="pu"><input type="submit" value="submit" />-->
            </div>
          </form>
        </div>
      </section>
    </div>

    <?php include('footer.php'); ?>
  <script src="js/contact.js"></script>
</body>
</html>
