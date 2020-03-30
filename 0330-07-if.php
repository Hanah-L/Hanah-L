<!-- 跟頁面無關的寫在這 -->
<?php
$age = isset($_GET)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 跟頁面有關的寫在這 -->
    <?php
    if ($age >= 18) {
        echo 'Welcome<br>';
    } else {
        echo 'nono<br>';
    }
    ?>
    <?php if ($age >= 18) { ?>
        alkdjf
        alkjdf
        <h2>18</h2>
    <?php } else { ?>
        hakjdh
        ahkdjhf
        <h2>17</h2>
    <?php } ?>
</body>

</html>