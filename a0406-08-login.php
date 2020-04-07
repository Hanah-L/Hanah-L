<?php
// 若未設定session，則啟動session
if(! isset($_SESSION)){
    session_start();
}


if(isset($_POST['account']) and isset($_POST['password'])){
    if($_POST['account'] == 'hanah' and $_POST['password']=='1234'){
        $_SESSION['loginUser'] = 'hanah';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['loginUser'])): ?>
        <div>
            <?= $_SESSION['loginUser'] ?>, 您好
        </div>
        <a href="a0406-09-logout.php">登出</a>

    <?php else: ?>
        <form action="" method="post">
            <input type="text" name="account" placeholder="account"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit">
        </form>
    <?php endif; ?>
</body>
</html>
