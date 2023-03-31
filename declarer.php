<!DOCTYPE html>
<html>
<head>
	<title>DOW</title>
	<link rel="stylesheet" type="text/css" href="projet.css">
</head>
<body>
	<header>
		<h1>DOW</h1>
		<nav>
			<ul>
				<li><a href="declarer.php">Déclarer un problème</a></li>
				<li><a href="eclairer.php">Eclairer une rue</a></li>
				<li><a href="chercher.php">Chercher un problème</a></li>
			</ul>
		</nav>
		<a href="agent.php"><button class="agent-btn" src="agent.php">Agent/Responsable</button></a>
	</header>
	
	<main>
		<section>
			<h2>Déclarer un problème</h2>
			<form action="#" method="POST">
			  <label for="probleme">Problème:</label>
			  <select id="probleme" name="probleme">
				<option value="panne_eclairage">Panne d'éclairage public</option>
				<option value="chaussee_abimee">Chaussée abîmée</option>
				<option value="trottoir_abime">Trottoir abîmé</option>
				<option value="egout_bouche">Égout bouché</option>
				<option value="arbre_tailler">Arbre à tailler</option>
				<option value="voiture_ventouse">Voiture ventouse</option>
				<option value="autre">Autre</option>
			  </select>
			  <div id="autre" style="display:none;">
				<label for="autre_probleme">Autre:</label>
				<input type="text" id="autre_probleme" name="autre_probleme">
			  </div>
			  <label for="nom_rue">Nom rue:</label>
			  <input type="text" id="nom_rue" name="nom_rue">
			  <label for="num_rue">Numéro rue:</label>
			  <input type="text" id="num_rue" name="num_rue" placeholder="Exemple : 15 ou 10-20">
			  <label for="urgence">Niveau d'urgence:</label>
			  <select id="urgence" name="urgence">
				<option value="faible" selected>Faible</option>
				<option value="moyen">Moyen</option>
				<option value="eleve">Élevé</option>
				<option value="tres_urgent">Très urgent</option>
			  </select>
			  <label for="nom_habitant">Nom habitant:</label>
			  <input type="text" id="nom_habitant" name="nom_habitant">
			  <input type="submit" value="Déclarer">
			</form>
		  </section>		  
	</main>
	<script src="declarer.js"></script>
</body>
</html>
