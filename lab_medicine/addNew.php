<?php
include 'layout/Header.php';
//item action
$id = null;
//Process create or update
$edit      = false;
$medicine        = [];
if (!empty($_GET['id'])) {
    $edit = true;
    $id      = $_GET['id'];
    $sql_getMedicine = "SELECT * FROM medicine WHERE id = " . $id;
    $pdo       = Database::connect();
    $medicine         = $pdo->query($sql_getMedicine)->fetch();
}
?>
<div class="body-contenter">
    <?php include 'component/MedicineDetail.php' ?>
    <script src="./app.js"></script>
<?php
    Database::disconnect();
    @include 'layout/Footer.php';
?>