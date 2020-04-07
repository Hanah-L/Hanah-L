<?php

// 若未設定session，則啟動session
if(! isset($_SESSION)){
    session_start();
}

// 若有設定session，則每重新登入一次就累加1
if(isset($_SESSION['myvar'])){
    $_SESSION['myvar']++;
// 相反則預設起始值為1
}else{
    $_SESSION['myvar'] = 1;
}

echo $_SESSION['myvar'];