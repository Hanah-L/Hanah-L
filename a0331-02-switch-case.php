<?php
$s = isset($_GET['s']) ? intval($_GET['s']) : 0;
?>
<form action="" method="get">
<!-- <input type="text" name="s" value="<?php echo $s ?>"> -->
<input type="text" name="s" value="<?= $s ?>">
<input type="submit">
</form>

<?php
$ss = intval($s/10);

switch($ss){
    
    case 10:
    case 9:
        $g = 'A';
    break;
    case 8:
        $g = 'B';
    break;
    case 7:
        $g = 'C';
    break;
    case 6:
        $g = 'D';
    break;
    default:
        $g = 'F';
    break;
}
echo $g;

// if($s>=90){
//     $g = 'A';
// }else if($s>=80){
//     $g = 'B';
// }else if($s>=70){
//     $g = 'C';
// }else if($s>=60){
//     $g = 'D';
// }else{
//     $g = 'F';
// }
// echo $g;
?>