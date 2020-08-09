<div class="page-edit">
    <div class="edit-title"><?=$edit ? "EDIT MEDICINE" : "ADD MEDICINE"?> </div>
    <form id="formDetail" enctype="multipart/form-data" method="POST" action="service/medicine.php<?=$edit ? "?id=".checkEmptyValue($medicine, "id") : ""?>">
        <div class="form-edit">
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine name <span>*<span></label>
                    <input value="<?=checkEmptyValue($medicine, "name")?>" name="name" id="name"/>
                    <span class="error-field" id="error-name"></span>
                </div>
                <div class="form-group">
                    <label>Medicine date <span>*<span></label>
                    <input class="input-date" value="<?=convertDateInput(checkEmptyValue($medicine, "date"))?>" name="date" id="date" type="date"/>
                    <span class="error-field" id="error-date"></span>
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine uses <span>*<span></label>
                    <input value="<?=checkEmptyValue($medicine, "uses")?>" name="uses" id="uses"/>
                    <span class="error-field" id="error-uses"></span>
                </div>
                <div class="form-group">
                    <label>Medicine type <span>*<span></label>
                    <select name="type" id="type">
                    <option value="" <?= empty($type) ? "selected" : "" ?>>-Select type-</option>
                        <?= genderDataSelect($dataSelectMedicine, checkEmptyValue($medicine, "type")) ?>
                    </select>
                    <span class="error-field" id="error-type"></span>
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine amount <span>*<span></label>
                    <input value="<?=checkEmptyValue($medicine, "amount")?>" type="number" name="amount" id="amount"/>
                    <span class="error-field" id="error-amount"></span>
                </div>
                <div class="form-group">
                    <label>Medicine note</label>
                    <input value="<?=checkEmptyValue($medicine, "note")?>" name="note" id="note"/>
                </div>
            </div>
            <div class="form-group form-group-upload">
                <img src="<?=$edit ? getUrlServerImg($medicine["image"]) : getUrlServerImg("null_img.png")?>" id="form-upload-preview" class="img-preview" alt="your image"/>
                <div class="upload-wrapper">
                <label class="upload-button">
                <input data="<?=checkEmptyValue($medicine, "image")?>" accept="image/*" id="upload" onchange="changeInputUpload(this)" name="upload" type="file" />
                    Upload Image
                </label>
                <input type="hidden" name="last_upload" value="<?=checkEmptyValue($medicine, "image")?>"/>
                </div>
            </div>
            <span class="error-field error-img" id="error-upload"></span>
            <div class="form-group-row">
                <div class="button-group <?=$edit ? " form-group-edit" : ""?>">
                <button type="button" onclick="validateForm()" class="button-submit">Submit</button>
                <button type="button" class="button-cancel"><a href="index.php">Cancel</a></button>
                <?php if($edit) echo "<button onclick='showModalConfirm(`open-modal-confirm`,`block`,".$medicine['id'].")'
                 type='button' class='button-remove'>Remove</button>";
                ?>
            </div>
            </div>
            </form>
    </div>
    <?php include "ModalConfirm.php" ?>
</div>