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
    $ar1 = [
        'name' => 'Flora',
        'age' => 26,
        'gender' => 'female',
        'id' => 'A26789',
    ];

    foreach ($ar1 as $k => $v) {
        echo "$k =&gt; $v <br>";
        
    }
     
    ?>

</body>

</html>