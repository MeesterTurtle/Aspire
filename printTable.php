<?php

function printTable(&$connb)
{
    include "ConnectDatabase.php";
    $sql = "SELECT * FROM agenda";
    $result = $conn->query($sql);
    $num_rows = 0;

    if ($result->rowCount() > 0) {
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
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row["afspraken"] . "</td><td>" . $row["datum"] . " " . $row["punten"] . "</td><td>" . $row["achternaam"] . "</td><td>" . $row["voornaam"] . "</td><td>" . $row["completed"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

