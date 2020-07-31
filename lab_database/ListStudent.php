<?php 
    include 'layout/Header.php';
    include 'service/database.php';
    include 'common/function.php';
    include 'common/config.php';
    //item action
    $id = null;
    
    //Process data list
    $currentSearch = [];
    $year  = isset($_GET['year']) ? $currentSearch['ns'] =  $_GET['year'] : "";
    $name  = isset($_GET['name']) ? $currentSearch['ten_sv'] = $_GET['name'] : "";
    $condition = genderSqlCondition($currentSearch);
    $pdo       = Database::connect();
    $sql       = "SELECT * FROM sinhvien ".$condition." ORDER BY ma_sv ASC";
    $dataSV    = $pdo->query($sql);

    //Process create or update
    $edit      = false;
    $sv        = [];
    if (!empty($_GET['ma_sv'])) {
        $edit       = true;
        $ma_sv      = $_GET['ma_sv'];
        $sql_get_sv = "SELECT * FROM sinhvien WHERE ma_sv = " . $ma_sv;
        $sv         = $pdo->query($sql_get_sv)->fetch();
    }

?>
    <a href="/">GOBACK</a>
    <div class="body-contenter">
        <div class="page-title">LIST STUDENTS</div>
        <div class="page-content">
            <?php include 'component/actionGroup.php' ?>
            <?php include 'component/listData.php' ?>
        </div>
    <?php include 'component/modalDetail.php'?>
    <?php include 'component/ModalConfirm.php'?>
    <script src="./app.js"></script>
<?php
    Database::disconnect();
    @include 'layout/Footer.php';
?>
