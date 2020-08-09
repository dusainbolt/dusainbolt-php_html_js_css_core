<div class="page-content">
    <div class="page-content-title">
        <h1>Danh sách thuốc<h1>
        <h2>Các sản phẩm mới nhất theo từng sản phẩm<h2>
    </div>
    <?php $i=0; foreach ($dataMedicine as $row){
        if($i % 5 == 0){
            ?>
                <div class="page-content-row col-5">
            <?php
        }
        ?>
         <div class="col">
        <div class="medicine-wrapper">
                <img src="<?=getUrlServerImg($row["image"])?>">
                <h2><?=$row["name"]?></h2>
                <span><b><?=$row["type"]?></b> còn lại: <?=$row["amount"]?></span>
               <button type="button"><a href="addNew.php?id=<?=$row["id"]?>">CHI TIẾT</a></button>
            </div>      
          </div>
        <?php
        if(++$i % 5 == 0){
            ?></div> 
            <?php
        }
    } ?>
    <div class="page-content-row"></div>
</div>