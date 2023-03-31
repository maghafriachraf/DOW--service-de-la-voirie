<?php
    $cn = pg_connect("host=localhost port=5432 dbname=DOW user=postgres password=Achraf-000");
    if($cn){
        echo "connected";
    }else{
        echo "ERREUR";
    }
?>
