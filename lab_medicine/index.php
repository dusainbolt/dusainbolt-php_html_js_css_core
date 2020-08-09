<?
include 'layout/Header.php';

//item action
$id = null;
$edit = false;
//Process data list
$currentSearch = [];
$name  = isset($_GET['name']) ? $currentSearch['name'] = $_GET['name'] : "";
$id  = isset($_GET['id']) ? $currentSearch['id'] =  $_GET['id'] : "";
$type  = isset($_GET['type']) ? $currentSearch['type'] = $_GET['type'] : "";
$condition = genderSqlCondition($currentSearch);
$pdo       = Database::connect();
$sql       = "SELECT * FROM medicine " . $condition . " ORDER BY id ASC";
$dataMedicine    = $pdo->query($sql);
?>

<div class="banner">
    <img src="upload/banner.jpg">
</div>
<div class="body-contenter">
    <?php include 'component/ActionGroup.php' ?>
    <?php include 'component/ListData.php' ?>
    <script src="./app.js"></script>
    <?php
    Database::disconnect();
    @include 'layout/Footer.php';
    ?>