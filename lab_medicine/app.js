function showModal(modal,type) {
    document.getElementById(modal).style.display=type;
}

function showModalConfirm(modal,type, id = null) {
    console.log(modal, id, type);
    document.getElementById(modal).style.display=type;
    document.getElementById('modal-title').innerHTML= "Remove medicine id " + id;
    document.getElementById('modal-description').innerHTML="Are you accept to remove medicine " + id;
    document.getElementById('modal-button').href="service/removeMedicine.php?id="+id;

}

function clearFilter() {
    document.getElementById('filter-year').value="";
    document.getElementById('name-search').value="";
}

function changeInputUpload(input) {
    const img = document.getElementById("form-upload-preview");
    if (input.files && input.files[0] && checkImgae(input.files[0].type)) {
      var reader = new FileReader();
      reader.onload = function(e) {
        img.setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

function validateForm() {
    let text = "Not valid";
    let image = document.getElementById("upload");
    const data = {
        name: document.getElementById("name").value,
        date: document.getElementById("date").value,
        uses: document.getElementById("uses").value,
        type: document.getElementById("type").value,
        amount: document.getElementById("amount").value,
        upload: image.files.length,
    }
  let valid = true;
  for(const [key, value] of Object.entries(data)){
      if(key === "upload" && image.getAttribute("data")){
        continue;
      }
      text = value ? "" : "Not valid";
      valid = value ? true : false;
      document.getElementById(`error-${key}`).innerHTML = text;
  }
  if(valid){
    document.getElementById("formDetail").submit();
  }
}

function checkImgae(image){
    const index = image.indexOf("image/");
    return index === 0 ? true : false;
}