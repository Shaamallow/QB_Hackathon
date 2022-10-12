var fileobj;
function upload_file(e) {
  e.preventDefault();
  fileobj = e.dataTransfer.files[0];
  ajax_file_upload(fileobj);
}

function file_explorer() {
  document.getElementById("selectfile").click();
  document.getElementById("selectfile").onchange = function () {
    console.log("Uploading");
    fileobj = document.getElementById("selectfile").files[0];
    ajax_file_upload(fileobj);
  };
}

function resetupload() {
  $("")
}

function ajax_file_upload(file_obj) {
  if (file_obj != undefined) {
    var form_data = new FormData();
    form_data.append("file", file_obj);
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "upload_file.php", true);
    xhttp.onload = function (event) {
      oOutput = document.querySelector(".img-content");
      if (xhttp.status == 200) {

        // Resource found, displaying image
        $("#drop_file_zone").hide();
        oOutput.innerHTML =
          "<img style = \"height: auto; width: 320px\" src='" + this.responseText + "' alt='The Image' />";
      } else {

        // Error, cannot upload
        oOutput.innerHTML =
          "Error " +
          xhttp.status +
          " occurred when trying to upload your file.";
      }
    };

    xhttp.send(form_data);
  }
}
