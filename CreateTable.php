<?php
function CreateTable(){

        //Create Table
        $sql = "CREATE TABLE agenda (
    afspraken    VARCHAR(255) NOT NULL,
    datum            DATETIME NOT NULL,
    punten           INT(2) NOT NULL,
    achternaam       VARCHAR(255) NOT NULL,
    voornaam         VARCHAR(255) NOT NULL,
    completed        BOOLEAN NOT NULL
    )";


        //Use exec() because no results are returned
        $conn->exec($sql);
        echo "Table created successfully<br>";
    }

    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

include_once "ConnectDatabase.php";

?>
