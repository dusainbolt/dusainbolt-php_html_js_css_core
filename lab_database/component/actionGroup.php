<div class="action-group">
    <button class="button-left btn-primary" onclick="showModal('open-modal','block')">Thêm sinh viên</button>
    <div class="search-group">
    <form action="ListStudent.php" method="GET">
        <label>Tên</label>
        <input value="<?=$name?>" class="input-search" id="name-search" name="name"/>
        <label>Năm sinh</label>
        <select id="filter-year" name="year">
            <option value="" disabled <?= empty($year) ? "selected" : "" ?>>-Chọn năm-</option>
            <?php genderDataSelect($dataBirthday, $year); ?>
        </select>
        <button type="submit" class="button-group-item btn-primary">SEACH</button>
        <button type="submit" onclick="clearFilter()" class="button-group-item btn-red">CLEAR</button>
    </form>
    </div>
</div>