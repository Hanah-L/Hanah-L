<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 橫式 -->
<table><tr>
<?php for($i=1; $i<=9; $i++): ?>
    <td><?=$i?></td>
    <?php endfor; ?>
</tr></table>


<!-- 直式 -->
<table>
<?php for($i=1; $i<=9; $i++): ?>
    <tr>
    <td><?= $i?></td>
    </tr>
<?php endfor; ?>
</table>
</body>
</html>