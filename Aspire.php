<?php

function CreateDatabase(){
    $servername =       "localhost";
    $username   =       "root";
    $password   =       "";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        //Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Create Database
        $sql = "CREATE DATABASE aspire";
        //Use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
    }

    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

function CreateTable(){
    include "ConnectDatabase.php";

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

function InsertInto(){
    include "ConnectDatabase.php";

        //Insert Into
        $sql = "INSERT INTO agenda (afspraken)
    VALUES ('Test')";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully<br>";
}

function printTable(&$connb){
	include "ConnectDatabase.php";
    $sql = "SELECT * FROM agenda";
	$result = $conn->query($sql);
	$num_rows = 0;
    
if ($result->rowCount()>0) {
	echo "<table>";
	echo "<table border='7'>";
	echo "<tr>";
	
	echo "<th>Afspraken:</th>";
	echo '&nbsp;';
	echo "<th>Datum:</th>";
	echo '&nbsp;';
	echo "<th>Punten:</th>";
	echo '&nbsp;';
	echo "<th>Achternaam:</th>";
	echo '&nbsp;';
	echo "<th>Voornaam:</th>";
	echo '&nbsp;';
	echo "<th>Completed:</th>";
	echo '&nbsp;';
	echo "</tr>";

    // output data of each row
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>".$row["afspraken"]."</td><td>".$row["datum"]." ".$row["punten"]."</td><td>".$row["achternaam"]."</td><td>".$row["voornaam"]."</td><td>".$row["completed"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}




CreateDatabase();

CreateTable();

InsertInto();

printTable($connb);

?>