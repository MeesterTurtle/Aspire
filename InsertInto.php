<?php
function InsertInto(){

        //Insert Into
        $sql = "INSERT INTO agenda (afspraken)
    VALUES ('Test')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";


    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}

include_once "ConnectDatabase.php";

?>