<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 顯示字串內的內容
    $ar1 = array(2, 3, 4, 5, 'hello', '您好');

    foreach ($ar1 as $i) {
        echo "$i <br>";
        
    }

    echo "<br>";
    
    foreach ($ar1 as $i) {
        echo "$i";
        
    }
       
    ?>

</body>

</html>