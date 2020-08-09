<div class="page-edit">
    <div class="edit-title">EDIT MEDICINE</div>
    <form id="formDetail" enctype="multipart/form-data" method="POST" action="service/medicine.php">
        <div class="form-edit">
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine name <span>*<span></label>
                    <input name="name" id="name"/>
                    <span class="error-field" id="error-name"></span>
                </div>
                <div class="form-group">
                    <label>Medicine date <span>*<span></label>
                    <input class="input-date" name="date" id="date" type="date"/>
                    <span class="error-field" id="error-date"></span>
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine uses <span>*<span></label>
                    <input name="uses" id="uses"/>
                    <span class="error-field" id="error-uses"></span>
                </div>
                <div class="form-group">
                    <label>Medicine type <span>*<span></label>
                    <select name="type" id="type">
                        <option disabled selected value="">Slect a type</option>
                        <option value="Type 1">sdsd</option>
                        <option value="Type 2">sdsd</option>
                        <option value="Type 3">sdsd</option>
                    </select>
                    <span class="error-field" id="error-type"></span>
                </div>
            </div>
            <div class="form-group-row">
                <div class="form-group">
                    <label>Medicine amount <span>*<span></label>
                    <input type="number" name="amount" id="amount"/>
                    <span class="error-field" id="error-amount"></span>
                </div>
                <div class="form-group">
                    <label>Medicine note</label>
                    <input name="note" id="note"/>
                </div>
            </div>
            <div class="form-group form-group-upload">
                <img src="<?=getUrlServerImg("null_img.png")?>" id="form-upload-preview" class="img-preview" alt="your image"/>
                <div class="upload-wrapper">
                <label class="upload-button">
                <input accept="image/*" id="upload" onchange="changeInputUpload(this)" name="upload" type="file" />
                    Upload Image
                </label>
                </div>
            </div>
            <span class="error-field error-img" id="error-upload"></span>
            <div class="form-group-row">
                <div class="button-group">
                <button type="button" onclick="validateForm()" class="button-submit">Submit</button>
                <button type="button" class="button-cancel"><a href="index.php">Cancel</a></button>
                </div>
            </div>
            </form>
    </div>
</div>