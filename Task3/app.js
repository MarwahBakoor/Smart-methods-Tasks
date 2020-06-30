function robotDirection(dir){
    let dis 
    if(document.querySelector('.input-'+ dir).value !== ""){
        dis= document.querySelector('.input-'+ dir).value;
        console.log(dis)
        console.log(dir)


  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.body.innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "insertData.php?dir=" +dir + "&dis=" + dis , true);
    xmlhttp.send();
}
}

function deleteRow(){
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.body.innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "DeletRow.php" , true);
    xmlhttp.send();
}
