<div>
<?php
if (!empty($ma_sv)) {
    ?>
    <div id="open-modal" style="display:block" class="modal-window">
    <?php
    } else {
        ?>
        <div id="open-modal" class="modal-window">
        <?php
        }
        ?>
        <div class="modal-content">
            <div class="modal-header">
                <h1><?= $edit ? "Sửa sinh viên ID ".$sv['ma_sv'] : "Thêm mới sinh viên" ?></h1>
                <?php if ($edit) {
                    echo '<a href="ListStudent.php">';
                }
                ?>
                <button onclick="showModal('open-modal','none')" class="modal-close">x</button>
                <?php if ($edit) {
                    echo "</a>";
                } ?>
            </div>
            <div class="modal-body">
                <form action="service/createStudent.php<?= $edit ? "?type=edit&ma_sv=" . $ma_sv : "" ?>" method="POST" class="form-wrapper">
                    <div class="from-group">
                        <label class="form-label">Họ và tên</label>
                        <input value="<?= checkEmptyValue($sv, 'ten_sv') ?>" name="name" class="form-field" />
                        <?= isset($nameError) ? '<em class="form-error-msg">Error</em>' : "" ?>
                    </div>
                    <div class="from-group">
                        <label class="form-label">Giới tính</label>
                        <select name="gender" class="form-field">
                            <option <?= $edit ? "" : "selected" ?> disabled value="0">-chọn giới tính-</option>
                            <?php genderDataSelect($dataGender, checkEmptyValue($sv, 'gt')); ?>
                        </select>
                    </div>
                    <div class="from-group">
                        <label class="form-label">Năm sinh</label>
                        <select name="year_brthday" class="form-field">
                            <option <?= $edit ? "" : "selected" ?> disabled="true" value="0">-chọn năm sinh-</option>
                            <?php genderDataSelect($dataBirthday, checkEmptyValue($sv, 'ns')); ?>
                        </select>
                    </div>
                    <div class="from-group">
                        <label class="form-label">Email</label>
                        <input value="<?= checkEmptyValue($sv, 'email') ?>" name="email" class="form-field" />
                    </div>
                    <div class="from-group">
                        <label class="form-label">Số điện thoại</label>
                        <input value="<?= checkEmptyValue($sv, 'dt') ?>" name="phone_number" type="number" class="form-field" />
                    </div>
                    <div class="from-group">
                        <label class="form-label">Mật khẩu</label>
                        <input value="<?= checkEmptyValue($sv, 'matkhau') ?>" name="password" class="form-field" />
                    </div>
                    <div class="modal-footer">
                        <button type=submit class="btn-primary btn-center"><?= $edit ? "Cập nhật" : "Lưu lại" ?></button>
                    </div>
                </form>

            </div>
        </div>
</div>