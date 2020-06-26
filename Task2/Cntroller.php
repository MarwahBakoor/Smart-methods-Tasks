
<?php 
require_once('includes/DbConfig.inc.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">  
    <style>
        body{
            background-color:#1a1a25;
            color:#fff;
        }
    </style>
    <script > 
    setInterval(function(){ 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.body.innerHTML = this.responseText;
      }}
      xmlhttp.open("GET", "updateController.php", true);
    xmlhttp.send();

     }, 1000);
     </script>
    <title>Cntroller</title>

</head>

<body>
<h1>
<?php 
    $sql ="SELECT * FROM cntroler1";
    $stmt = $connectingDB-> query($sql);
    while ($DataRows=$stmt->fetch()) {
    $Id          = $DataRows["id"];
    $dir       = $DataRows["dir"];
}

echo $dir;
    ?>
</h1> 
</body>
</html>