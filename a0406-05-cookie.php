<?php
setcookie('myc', 'my cookie')
// setcookie一定要放在html之前
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 第一次執行會跑不出來，再按一次即可 -->
    <?php
    echo $_COOKIE['myc'];
    ?>

</body>
</html>