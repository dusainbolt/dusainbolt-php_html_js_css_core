<div class="page-action-group">
    <form action="index.php" method="GET">
        <div class="wrapper">
            <ul>
                <li class="input-name">
                    <div class="label-search">Name medicine</div>
                    <input value="<?=$name?>" name="name"/>
                </li>
                <li class="input-id">
                    <div class="label-search">Id medicine</div>
                    <input value="<?=$id?>" name="id"/>
                </li>
                <li class="input-id">
                    <div class="label-search">Type medicine</div>
                    <select name="type" class="select">
                        <option value="" <?= empty($type) ? "selected" : "" ?>>-All type-</option>
                        <?= genderDataSelect($dataSelectMedicine, $type) ?>
                    </select>
                </li>
                <li class="button">
                    <button type="submit">Search</button>
                </li>
            </ul>
        </div>
    </form>
</div>