<!DOCTYPE html>
<html>
    <head>
		<!--Entete de la page-->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>SolidBIO|Inscription</title>
    </head>

    <body>
    <!-- Corps de la page -->
		<h1>Inscription</h1>
     
		
		
		<p><h2>Veuillez nous renseigner sur les champs ci-dessous</h2></p>
		<form method="post" action="Cible.php">
			
			<p>
				Prenom:<input type="text" name="$Prenom"/>
			</p>
			<p>
				Nom:<input type="text" name="$Nom"/>
			</p>
			<p>
				Age:<input type="text" name="$age"/>
			</p>
			<p>
				VotreIdentifiant:<input type="text" name="$identifiant"/>
			</p>
			<p>
				Votre pseudo:<input type="text" name="$pseudo" />
			</p>
			<p>
				Votre mot de passe:<input type="password" name="password" />
			</p>
			<p>Sexe:<select name="choix">
				<option value="choix1">Homme</option>
				<option value="choix2">Femme</option>	
			</select></p>
			<input type="submit" value="Inscription"/>
			<?php {
   					 $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'loan', 'azerty');

			?>
			<?php
			$req = $bdd->prepare('INSERT INTO test(nom, prenom, Age, pseudo, Identifiant, Motdepasse) VALUES(:nom, :prenom, :age, :pseudo, :Identifiant, :Motdepasse)');
			$req->execute(array(
				'nom' => $_POST['Nom'],
				'prenom' => $_POST['pseudo'],
				'age' => $_POST['age'],
				'pseudo' => $_POST['pseudo'],
				'Identifiant' => $_POST['identifiant'],
				'Motdepasse' => $_POST['password']
    			));

			echo 'Vous avez bien été enregistrer';
			?>
			
			
			

		</p>
		</form>
				
		<ul>
			<li><a href="/Monsite/Pageaccueil.php"><Strong>Page d'accueil</Strong></a></li>
			
		</ul>
    </body>
</html>