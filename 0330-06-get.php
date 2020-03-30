<?php

//echo $_GET ['a'] + $_GET ['b']; //可直接在網址列設定a與b的數值，做出運算

//查看a的query string參數有沒有設定，有設定就使用它的值，沒有設定的話$a就設定為0
$a = isset($_GET ['a']) ? $_GET ['a'] : 0;
$b = isset($_GET ['b']) ? $_GET ['b'] : 0;

$a = isset($_GET ['a']) ? intval($_GET ['a']) : 0; //intval轉換為整數
$b = isset($_GET ['b']) ? intval($_GET ['b']) : 0;

echo $a + $b;
echo '<br>';

//橫式
echo '<table><tr>';
for($i=1; $i<=$a; $i++){
    echo "<td>$i</td>";
}
echo '</tr></table>';

//直式
echo '<table>';
for($i=1; $i<=$a; $i++){
    echo "<tr><td>$i</td></tr>";
}
echo '</table>';