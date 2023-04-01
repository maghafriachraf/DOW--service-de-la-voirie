<!DOCTYPE html>
<html>
<head>
	<title>DOW</title>
	<link rel="stylesheet" type="text/css" href="projet.css">
</head>
<body>
	<header>
    <h1><a href="main.php">DOW</a></h1>
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
			<h2>Eclairer une rue</h2>
			<p>Contactez notre équipe pour demander l'installation de lampadaires dans votre communauté.</p>
			<form action="#" method="post">
                <label for="nom_rue">Nom rue:</label>
			    <input type="text" id="nom_rue" name="nom_rue">
			    <label for="num_rue">Numéro rue:</label>
			    <input type="text" id="num_rue" name="num_rue" placeholder="Exemple : 15 ou 10-20">
                <label for="nom_habitant">Nom habitant:</label>
			    <input type="text" id="nom_habitant" name="nom_habitant">
			    <input type="submit" value="Eclairer">
            </form>
		</section>
	</main>
</body>
</html>