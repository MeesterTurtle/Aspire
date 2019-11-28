<?php
function InsertInto(){
    include "ConnectDatabase.php";

    //Insert Into
    $sql = "INSERT INTO agenda (afspraken)
    VALUES ('Test')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully<br>";
}

?>