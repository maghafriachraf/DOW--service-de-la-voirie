<?php
// Create a connection to the database
$host = "localhost"; // change this to your server name
$port = "5432"; // change this to your PostgreSQL port number
$dbname = "Projet"; // change this to your PostgreSQL database name
$user = "postgres"; // change this to your PostgreSQL username
$password = "hatim2003"; // change this to your PostgreSQL password

try {
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Retrieve data from the form
$nom_probleme = $_POST['probleme'];
$autre = $_POST['autre_probleme'];
$nom_rue = $_POST['nom_rue'];
$num_rue = $_POST['num_rue'];
$nom_habitant = $_POST['nom_habitant'];

// Insert the data into the database
$sql = "SELECT declarer($1,$2,$3,$4)";

$stmt = pg_prepare($conn, "my_query", $sql);
if ($stmt) {
    $values = array($nom_probleme,$nom_rue,$num_rue,$nom_habitant);
    $result = pg_execute($conn, "my_query", $values);

    if (!$result) {
        echo "Error executing statement: " . pg_last_error($conn);
    }
} else {
    echo "Error preparing statement: " . pg_last_error($conn);
}

// Close the database connection
pg_close($conn);
?>

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
		
	</main>
</body>
</html>

