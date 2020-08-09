<?php
include 'layout/Header.php';
//item action
$id = null;
//Process data list
$currentSearch = [];
$year  = isset($_GET['year']) ? $currentSearch['ns'] =  $_GET['year'] : "";
$name  = isset($_GET['name']) ? $currentSearch['ten_sv'] = $_GET['name'] : "";
$condition = genderSqlCondition($currentSearch);
$pdo       = Database::connect();
$sql       = "SELECT * FROM sinhvien " . $condition . " ORDER BY ma_sv ASC";
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
<div class="body-contenter">
    <?php include 'component/MedicineDetail.php' ?>
    <script src="./app.js"></script>
<?php
    Database::disconnect();
    @include 'layout/Footer.php';
?>