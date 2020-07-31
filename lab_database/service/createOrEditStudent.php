<?php
     
    require 'database.php';
 
    if (!empty($_POST)) {
        $nameError = null;
        $emailError = null;
        $mobileError = null;
        $mobileError = null;
        $mobileError = null;
        $mobileError = null;
         
        $type = isset($_GET['type']) ? $_GET['type'] : "";
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
        $year_brthday = isset($_POST['year_brthday']) ? $_POST['year_brthday'] : "";
        $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "" ;
        
        $valid = true; // validate
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if($type == "edit"){
                    $ma_sv = $_GET['ma_sv'];
                    $sql = "UPDATE sinhvien SET ten_sv=?, ns=?, gt=?, email=?, dt=?, matkhau=? WHERE ma_sv=".$ma_sv;
                }else{
                    $sql= "INSERT INTO sinhvien (ten_sv,ns,gt,email,dt,matkhau) values(?, ?, ?, ?, ?, ?)";
                }
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$year_brthday,$gender,$email,$phone_number,$password));
            Database::disconnect();
            header("Location: ../ListStudent.php");
        }
    }
?>