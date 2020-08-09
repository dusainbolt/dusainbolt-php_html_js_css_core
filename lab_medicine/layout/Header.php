<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/edit.css">
    <link rel="icon" href="../logo.png" />
    <title>LEHUYDU_KMA</title>
</head>

<body>
  <?php 
    include 'service/database.php';
    include 'common/function.php';
    include 'common/config.php';
  ?>
<div class="header">
  <a href="index.php" class="logo">MEDICINE WEBSITE</a>
  <div class="header-right">
    <a class="<?=checkActiveMenu("index.php")?>" href="index.php">HOME</a>
    <a class="<?=checkActiveMenu("addNew.php")?>" href="addNew.php">ADD NEW</a>
    <a href="index.php">TYPE 1</a>
    <a href="index.php">TYPE 2</a>
    <a href="index.php">TYPE 3</a>
  </div>
</div>