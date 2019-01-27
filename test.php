<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" media="all" rel="Stylesheet" type="text/css" />
    <title>Hello</title>
</head>
<body>
<h1>How to write PHP</h1>
<?php
    echo "<h2>This is it!</h2>";
    echo "5 + 7 =";
?>
<?php
    echo 5+7;
?>
<br>
<?php
    $x = 5;
    $y = 7;
    echo $x + $y;
?>
<br>
<?php
    $apple = "りんご";
    echo $apple;
?>
<br>
<?php
    $num = 10 + 10;
    echo $num;
?>
<br>

<!-- 演習5 -->

変数と文字列を結合したい場合'''
<?php
    $rand = mt_rand(1,100);
    if ($rand > 50){
        echo $rand." is more than 50";
    }else{
        echo $rand." is less than 49";
    }
?>
<br>
<?php

$fruit = "melon";

if ($fruit == "Apple"){
    echo "it is Apple";
}else{
    echo "it is not Apple";
}

?>
<br>
<!-- mt_rand(始まる値, 上限の値) -->
<?php
    echo mt_rand(1,10);
?>

<div class="img">
<?php
    echo '<img src="http://blog-imgs-31.fc2.com/r/a/i/rainia/00.jpg" style="width:100%">';
?>
</div>
</body>
</html>