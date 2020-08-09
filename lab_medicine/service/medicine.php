<?php
     
    require 'database.php';
    require 'upload.php';

    if (!empty($_POST)) {
        $valid = true; // validate
        $name = isset($_POST['name']) ? $_POST['name'] : $valid = false;
        $date = isset($_POST['date']) ? $_POST['date'] : $valid = false;
        $uses = isset($_POST['uses']) ? $_POST['uses'] : $valid = false;
        $type = isset($_POST['type']) ? $_POST['type'] : $valid = false;
        $amount = isset($_POST['amount']) ? $_POST['amount'] : $valid = false;
        $note = isset($_POST['note']) ? $_POST['note'] : "";
        $lastUpload = isset($_POST['last_upload']) ? $_POST['last_upload'] : "";
        $image = uploadFile("upload","../upload/");
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $image = $image ? $image : $lastUpload;
                    var_dump($image);
                    $sql = "UPDATE medicine SET name=?, date=?, uses=?, type=?, amount=?, note=?, image=? WHERE id=".$id;
                    $data = array($name,$date,$uses,$type,$amount,$note,$image);
                }else{
                    $sql= "INSERT INTO medicine (name,date,uses,type,amount,note,image) values(?, ?, ?, ?, ?, ?, ?)";
                    $data = array($name,$date,$uses,$type,$amount,$note,$image);
                }
            $q = $pdo->prepare($sql);
            var_dump($sql);
            $q->execute($data);
            Database::disconnect();
            header("Location: ../index.php");
        } else {
            echo "Du lieu khong phu hop";
            die;
        }
    }
?>