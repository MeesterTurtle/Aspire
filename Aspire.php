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

Function Table(){

    include "ConnectDatabase.php";
    $return = $conn->query("SELECT * From agenda");
    $data = $return->fetchall(PDO::FETCH_ASSOC);
    for ($i = 0; $i < sizeof($data); $i++) {
        echo "<tr>";
        foreach ($data[$i] as $x => $y) {
            echo "<td>" . $y . "</td>";
        }
        echo "<td></td>";
        echo "</tr>";
    }
    echo "<table>";

}

CreateDatabase();

CreateTable();

InsertInto();

Table();



?>