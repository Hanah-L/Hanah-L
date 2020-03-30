<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$my = 123; //php的全域變數不用宣告，直接設定即可
//echo $my;
$a = "55";
$b = "abc";

echo $my+ $a; //只做數值的相加
echo "<br>";
echo $my+ $b;
echo "<br>";

echo $my. $a; //做字串的串接
echo "<br>";
echo $my. $b;
echo "<br>";

$n = "name";
$$n = "hanah";
echo $name; //以變數值的名稱作為變數


?>
</body>
</html>