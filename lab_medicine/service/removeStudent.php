<?php
     
    require 'database.php';
 
    if (!empty($_GET)) {
        $ma_sv = isset($_GET["ma_sv"]) ? $_GET['ma_sv'] : "";
        // insert data
        if($ma_sv != ""){
            $pdo = Database::connect();
            $sql = "DELETE from sinhvien WHERE ma_sv=".$ma_sv;
            $pdo->query($sql);
            Database::disconnect();
            header("Location: ../ListStudent.php");
        } 
    }
?>