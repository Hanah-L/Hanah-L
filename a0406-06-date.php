<div>
<?php
// 亞洲時區 台灣時間
date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
echo '<br>';

// 50天後的日期 兩種表現方式
echo date("Y-m-d H:i:s", time()+50*24*60*60);
echo '<br>';
echo date("Y-m-d H:i:s", strtotime('+50 days'));
echo '<br>';

// 50天後是星期幾 兩種表現方式
echo date("w",time()+50*24*60*60);
echo '<br>';
echo date("D",time()+50*24*60*60);
echo '<br>';

// 直接指定日期
echo date("Y-m-d H:i:s", strtotime('03/06/2019'));
echo '<br>';
?>
</div>