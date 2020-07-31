function showModal(modal,type) {
    document.getElementById(modal).style.display=type;
}

function showModalConfirm(modal,type, id = null) {
    document.getElementById(modal).style.display=type;
    document.getElementById('modal-title').innerHTML= "Xóa sinh viên " + id;
    document.getElementById('modal-description').innerHTML="Bạn có chắc muốn xóa toàn bộ dữ liệu của sinh viên " + id;
    document.getElementById('modal-button').href="service/removeStudent.php?ma_sv="+id;

}


function clearFilter() {
    document.getElementById('filter-year').value="";
    document.getElementById('name-search').value="";
}

