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
	<div class="login-container">
		<h1>DOW Login</h1>
		<form id="login-form">
		  <label for="username">Nom:</label>
		  <input type="text" id="username" name="username">
		  <br>
		  <label for="password">Mot de passe:</label>
		  <input type="password" id="password" name="password">
		  <br>
		  <input type="submit" value="Connexion">
		</form>
	  </div>
	  <script src="agent.js"></script>
	</body>
	</html>