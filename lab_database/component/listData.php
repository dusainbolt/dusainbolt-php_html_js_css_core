<table>
    <thead>
        <tr>
            <th style="width: 8%">ID</th>
            <th style="width: 15%">FULL NAME</th>
            <th style="width: 10%">BIRTHDAY</th>
            <th style="width: 7%">GENDER</th>
            <th style="width: 20%">EMAIL</th>
            <th style="width: 10%">PHONENUMBER</th>
            <th style="width: 10%">PASSWORD</th>
            <th style="width: 10%">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
        foreach ($dataSV as $row) {
            echo "<tr>";
            echo "<td>" . $row['ma_sv'] . "</td>";
            echo "<td>" . $row['ten_sv'] . "</td>";
            echo "<td>" . $row['ns'] . "</td>";
            echo "<td>" . $row['gt'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['dt'] . "</td>";
            echo "<td>" . $row['matkhau'] . "</td>";
            echo '<td class="btn-group-table">
                        <a href="ListStudent.php?ma_sv=' . $row['ma_sv'] . '" onclick="showModal(`open-modal`,`block`)">
                        <button class="btn-yellow btn-small">Sửa</button>
                        </a>
                        <button onclick="showModalConfirm(`open-modal-confirm`,`block`,'.$row['ma_sv'].')" class="btn-red  btn-small">Xóa</button>
                  </td>';
            echo "</tr>";
        }
        ?>
    </tbody>
<table>