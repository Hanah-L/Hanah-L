<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 後端的資料比前端的資料安全，因不容易被用戶端看到 -->
    <?php
// echo 5+9;  //php的+只做數值的相加
// echo  '<br>';
// echo 7+12;
// 動態更改資料

echo PHP_VERSION. '<br>'; //PHP的版本
echo __DIR__. '<br>'; //此檔案所在的資料夾
echo __FILE__. '<br>'; //顯示檔案所在的完整路徑
echo __LINE__. '<br>'; //顯示行數(列數)

define('MY_CONST', 3333); //常數設定後無法更改，概念同js的const
echo MY_CONST. '<br>';
echo false. '<br>'; //布林值不區分大小寫，顯示為空字串
echo true. '<br>'; //布林值不區分大小寫，顯示為數值1


?>
</body>
</html>