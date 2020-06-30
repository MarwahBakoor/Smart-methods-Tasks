
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
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="app.js"> </script>
    <title>Robot Cntroller</title>

</head>

<body>
<div class="connecnt-div">
    <h1 class="title">Robot Cntroller</h1>
    <button href="#" class="btn active" >Connecnt</button>
    <button href="#" class="btn" >Disconnecnt</button>
    <div class="dir"><?php 
    $sql ="SELECT * FROM cntroler1";
    $stmt = $connectingDB-> query($sql);
    while ($DataRows=$stmt->fetch()) {
    $Id          = $DataRows["id"];
    $dir       = $DataRows["dir"];
}

echo $dir;
    ?>
</div>

</div>
<div class="Cntroller-div ">
    <div class="up">
    <div onclick="robotDirection('F')" class="wrapper">
        <svg  width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" >
            <g>
                <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
            </g>
        </svg>
    </div>
</div>
<div class="midd">
        <div class="wrapper">
        <svg onclick="robotDirection('L')" class="right" width="18px" height="17px" viewBox="0 0 18 17" version="1.1">
            <g id="prev" transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)">
                <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <path d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
            </g>
        </svg>

        <div onclick="robotDirection('S')" class="circle" ></div>
      
        <svg onclick="robotDirection('R')" class="left" width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" >
            <g>
                <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
            </g>
        </svg>
    </div>
    </div>

    <div class="down">
        <div class="wrapper">
        <svg onclick="robotDirection('B')" width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" >
            <g>
                <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                <path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
            </g>
        </svg>
        </div>
        </div>
      
</div>
</body>
</html>