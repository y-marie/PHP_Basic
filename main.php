<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    echo 'Hello, world!';
  ?>
  <br>

  <?php
  //PHPでは変数は $ を使う
    $fruit = 'りんご';
    echo $fruit;   
  ?>
  <br>


  <?php 
//変数上書き
  $x = 1;
  //$xに10足す
  $x += 10;

  //足す値が1の時だけかなり省略可
  $x ++;
  echo $x;
   ?>
   <br>


   <?php 

  $y = 3;
  $z = 3;
  echo ++$y;  //結果:4
        //echoの前に+1される

  echo $z++;  //結果:3
        //echoの後に+1される

    ?>

</body>
</html>