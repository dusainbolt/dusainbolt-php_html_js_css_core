<?php
     
    require 'database.php';
 
    if (!empty($_GET["id"])) {
        $id = $_GET['id'];
        // insert data
            $pdo = Database::connect();
            $sql = "DELETE from medicine WHERE id=".$id;
            $pdo->query($sql);
            Database::disconnect();
            header("Location: ../index.php");
    }else{
        echo "ERROR";
        die;
    }
?>