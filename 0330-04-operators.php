<?php
$a = 12;
$b = 10;

echo $a > $b;
echo '<br>';

echo $a < $b;
echo '<br>';

echo $a > $b ? '真' : '假';
echo '<br>';

echo $a < $b ? 'true' : 'false';
echo '<br>';

$b = 'aaa';
echo $b ?: 'false'; //如果$b是如果$b是true就輸出$b，如果$b是false就輸出false
echo '<br>';

echo $a || $b;
echo '<br>';

echo $a || $b ? '真' : '假';
echo '<br>';

$c = 20 || $d = 30;
echo "\$c=$c, \$d=$d <br>"; //結果為c=1 d沒有定義 ->符號||優先權比=高

($c = 20) || ($d = 30);
echo "\$c=$c, \$d=$d <br>"; //

$e = 20 or $f = 30;
echo "\$e=$e, \$f=$f <br>"; //結果為e=20 f沒有定義 ->=優先權比or高


//優先權順序: 單元運算子 > 算術運算子 > 關係運算子 > 邏輯運算子 > 指定運算子