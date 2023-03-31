<?php
function addProb($connection, $probleme, $autre_probleme, $nom_rue, $num_rue,$urgence, $nom_habitant){
  $query = "INSERT INTO Lieu (nom_rue, num_rue, ) VALUES (:nom_rue, :num_rue)";
  $statement = $connection->prepare($query);
  $statement->bindValue(":nom_rue", $nom_rue, PDO::PARAM_STR);
  $statement->bindValue(":num_rue", $num_rue, PDO::PARAM_STR);
  $statement->execute();
}

function getLieu($connection, $nom_rue, $num_rue){
    /*add lieu */
    $query = "INSERT INTO Lieu (nom_rue, num_rue, ) VALUES (:nom_rue, :num_rue)";
  $statement = $connection->prepare($query);
  $statement->bindValue(":nom_rue", $nom_rue, PDO::PARAM_STR);
  $statement->bindValue(":num_rue", $num_rue, PDO::PARAM_STR);
  $ok = $statement->execute();

    /*get id */
    $query = "SELECT idlieu FROM Lieu WHERE nom_rue=:nom_rue AND num_rue=:num_rue";
    $statement = $connection->prepare($query);
    $statement->bindValue(":nom_rue", $nom_rue, PDO::PARAM_STR);
    $statement->bindValue(":num_rue",$num_rue, PDO::PARAM_STR);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $idlieu = $row['idlieu'];
    return $idlieu;
  }

  

  

?>