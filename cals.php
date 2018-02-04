<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="http://icons.iconarchive.com/icons/dtafalonso/android-lollipop/512/Calculator-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>สูตรคำนวณ</title>
    <style >
      body{font-family: 'Athiti', sans-serif;}
      .text-center{text-align: center;}
      .box-border{border: 0px solid #000;}
      .top-10{margin-top:10px;}
      .right-10{margin-right:10px;}
      p{font-size: 18px;}
      .btn-cals{background-color: #555555;color:#fff;width: 250px !important;}
      .btn-cals:hover{background-color: #000;color:#fff;}
      .page-footer{height: 50px;}
      .result{background-color: tomato;color:#fff;font-size: 26px;}
    </style>
  </head>
  <body>
    <?php
        $Xone = $_POST['Xone'];
        $Yone = $_POST['Yone'];
        $Xtwo = $_POST['Xtwo'];
        $Ytwo = $_POST['Ytwo'];
        $Result = sqrt(pow(($Xone-$Xtwo),2)+pow(($Yone-$Ytwo),2));

        $MXone = $_POST['MXone'];
        $MYone = $_POST['MYone'];
        $MXtwo = $_POST['MXtwo'];
        $MYtwo = $_POST['MYtwo'];
        $MResultX = ($MXone+$MXtwo)/2;
        $MResultY = ($MYone+$MYtwo)/2;
     ?>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#5F5F5F;">
      <a class="navbar-brand" href="#" style="color:#fff;"><i class="fas fa-home"></i></a>
      <div class="navbar-header" style="background-color:#4CAF50;">
        <a class="navbar-brand" href="#" style="color:#fff;">GGAFILED</a>
      </div>
    </nav>
    <div class="container-fluid">
    <div class="row" style="margin-top:50px;">
      <div class="jumbotron text-center box-border" style="padding:10px !important;">
          <h2>เครื่องคำนวณหาระยะทางระหว่างจุดสองจุด</h2>
          <h4>(Calculates the distance between two points)</h4>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <p>จุดสองจุดที่อยู่ต่างที่กัน ไม่ตรงกันทั้งในแนวราบและแนวดิ่ง ค่า x จะต่างกัน และค่า y ก็จะต่างกันเช่นเดียวกัน ผลต่างของค่า x และค่า y นี่แหละที่สร้างด้านสองด้านของ “สามเหลี่ยมมุมฉาก” และเจ้าระยะทางระหว่างจุดสองจุดนั้นคือความยาว “ด้านตรงข้ามมุมฉาก” ของสามเหลี่ยมนี้ ทำให้เราได้สูตรการหาระยะทางระหว่างสองจุด</p>
      </div>
    </div>
    <div class="row">
      <center>
      <img class="img-responsive" src="http://www.thaigoodview.com/library/contest1/math04/07/2/BasicMathForM4/image/geom2.jpg" alt="road">
    </center>
    </div>
    <div class="row">
      <div class="container">
        <form action="index.php" method="post">
          <div class="form-inline text-center top-10">
            <label for="x1">Point x1:</label>
            <input type="number" class="form-control" placeholder="X1" name="Xone" value=<?php echo $_POST['Xone']; ?> required>
            <label for="y1">Point y1:</label>
            <input type="number" class="form-control" placeholder="Y1" name="Yone" value=<?php echo $_POST['Yone']; ?> required>
          </div>
          <div class="form-inline text-center top-10">
            <label for="x2">Point x2:</label>
            <input type="number" class="form-control" placeholder="X2" name="Xtwo" value=<?php echo $_POST['Xtwo']; ?> required>
            <label for="y2">Point y2:</label>
            <input type="number" class="form-control" placeholder="Y2" name="Ytwo" value=<?php echo $_POST['Ytwo']; ?> required>
          </div>
          <div class="form-inline text-center top-10">
            <input class="btn btn-lg btn-cals" type="submit" value="คำนวณ">
            <input class="btn btn-lg btn-cals" type="reset" value="ล้างหน้าจอ">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <p class="result text-center top-10"><span><i class="fas fa-calculator right-10"></i>ระยะทางระหว่างจุดสองจุดนั้นคือ : <?php echo number_format($Result, 2, '.', '');; ?></span>
      </p>
    </div><hr>
    <div class="row">
      <div class="jumbotron text-center box-border" style="padding:10px !important;">
          <h2>เครื่องคำนวณหาจุดกึ่งกลางระหว่างจุดสองจุด</h2>
          <h4>(Calculates the middle point between two points)</h4>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <p>จุดกึ่งกลาง (อังกฤษ: midpoint) คือจุดจุดหนึ่งที่อยู่บนตำแหน่งกึ่งกลางของส่วนของเส้นตรง ซึ่งอยู่ห่างจากจุดปลายทั้งสองเป็นระยะทางเท่ากัน จุดกึ่งกลางของส่วนของเส้นตรงบนระนาบ</p>
      </div>
    </div>
    <div class="row">
      <center>
      <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Midpoint.svg/1200px-Midpoint.svg.png" alt="middle" width="400px" height="400px">
    </center>
    </div>
    <div class="row">
      <div class="container">
        <form action="index.php" method="post">
          <div class="form-inline text-center top-10">
            <label for="x1">Point x1:</label>
            <input type="number" class="form-control" placeholder="MX1" name="MXone" value=<?php echo $_POST['MXone']; ?> required>
            <label for="y1">Point y1:</label>
            <input type="number" class="form-control" placeholder="MY1" name="MYone" value=<?php echo $_POST['MYone']; ?> required>
          </div>
          <div class="form-inline text-center top-10">
            <label for="x2">Point x2:</label>
            <input type="number" class="form-control" placeholder="MX2" name="MXtwo" value=<?php echo $_POST['MXtwo']; ?> required>
            <label for="y2">Point y2:</label>
            <input type="number" class="form-control" placeholder="MY2" name="MYtwo" value=<?php echo $_POST['MYtwo']; ?> required>
          </div>
          <div class="form-inline text-center top-10">
            <input class="btn btn-lg btn-cals" type="submit" value="คำนวณ">
            <input class="btn btn-lg btn-cals" type="reset" value="ล้างหน้าจอ">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <p class="result text-center top-10"><span><i class="fas fa-calculator right-10"></i>จุดกึ่งกลางระหว่างจุดสองจุดนั้นคือ : <?php echo "(".$MResultX.",".$MResultY.")" ?></span>
      </p>
    </div>
    </div>
    <footer class="page-footer"></footer>
  </body>
</html>
