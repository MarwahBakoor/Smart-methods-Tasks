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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="app.js"> </script>
    <title>Robot Control Panel</title>
</head>

<body>
    <div class="left">
    <div class="form__group field">
        <input type="input" class="form__field input-Forward" placeholder="Name" name="name" id='name' required />
        <label for="name" class="form__label">Forward</label>
        <input onclick="robotDirection('Forward')"  type="submit" class="form__button" value="Apply" name="name" id='name'/>
    </div>
    <div class="form__group field">
        <input type="input" class="form__field input-Right" placeholder="Name" name="name" id='name' required />
        <label for="name" class="form__label">Right</label>
        <input  onclick="robotDirection('Right')" type="submit" class="form__button" value="Apply" name="name" id='name'/>
    </div>
    <div class="form__group field">
        <input type="input" class="form__field input-Left" placeholder="Name" name="name" id='name' required />
        <label  for="name" class="form__label">Left</label>
        <input onclick="robotDirection('Left')" type="submit" class="form__button" value="Apply" name="name" id='name' />
    </div>
  <!--   <div class="form__group field">
        <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
        <label for="name" class="form__label">location</label>
        <p>In English please</p>
    </div> -->
   <!--    <div class="buttons">
    <input type="submit" class="button delete" value="Delete" name="name" id='name' />
    <input type="submit" class="button start" value="Save Table" name="name" id='name' />
  <input type="submit" class="button save" value="Start" name="name" id='name' />
    </div>
-->

<div class="buttons">
<input onclick="deleteRow()" type="submit" class="button delete" value="Delete" name="name" id='name' />
</div>

    
    <table id="table">
    <tr>
    <th>Distance(m)</th>
    <th>Direction</th>
 
  </tr>

    <?php 
    $connectingDB;
    $sql ="SELECT * FROM cntroler2 ORDER BY id DESC";
    $stmt = $connectingDB-> query($sql);
    while ($DataRows=$stmt->fetch()) {
    $Id          = $DataRows["id"];
    $distance       = $DataRows["distance"];
    $direction         = $DataRows["direction"];


    ?>
  <tr>
    <td> <?php echo $distance ?></td>
    <td> <?php echo $direction ?></td>
 
  </tr>
     <?php  } ?>



</table>
</div>


    <div class="right">
    <div class="path_cont">


    </div>

    </div>
</body>
</html>