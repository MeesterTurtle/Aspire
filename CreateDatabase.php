<?php
function CreateDatabase(){

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

include_once "ConnectDatabase.php";

?>