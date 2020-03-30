<?php
$a = 'hanah';
echo 'My name is $a<br>'; //單引號會呈現原本的內容
echo "My name is $a<br>"; //雙引號會把變數用變數值取代

echo "My name is {$a}123<br>"; //字串中要加上變數的方式一
echo "My name is ${a}123<br>"; //字串中要加上變數的方式二
echo "My name is $a123<br>"; //會出現Notice提醒，

//Notice 提醒微嚴重，若出現太多會出現破版
//Warning 警告嚴重
//Error 錯誤最嚴重，一出現，之後的程式就不會再跑

echo "<h2>Hello</h2>";

