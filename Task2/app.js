function robotDirection(dir){
    console.log(dir);
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.body.innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "updateData.php?dir=" +dir, true);
    xmlhttp.send();
}
