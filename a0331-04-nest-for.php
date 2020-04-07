<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <tr>
                <?php for ($k = 1; $k <= 9; $k++) : ?>

                    <!-- 九九乘法表顯示算式方法一(表現同二) -->
                    <!-- <td><?= $i . '*' . $k . '=' . $i * $k ?></td>  -->

                    <!-- 九九乘法表顯示算式方法二(表現同一) -->
                    <!-- <td><?= "$i*$k=" . $i * $k ?></td> -->

                    <!-- 九九乘法表顯示算式方法三(與一二表現相反) -->
                    <td><?= "$k*$i=" . $k * $i ?></td>

                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>