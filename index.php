<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'Fan.php';
$fan1 = new Fan();
$fan2 = new Fan();
$fan1->setSpeed(FAST);
$fan1->setStatus(true);
$fan1->setRadius(10);
$fan1->setColor('yellow');
echo 'Trang thai quat 1: '.$fan1->toString().'<br>';
echo 'Trang thai quat 2: '.$fan2->toString();
?>
</body>
</html>