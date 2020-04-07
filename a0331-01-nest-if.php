<?php

$s = isset($_GET['s']) ? intval($_GET['s']) : 0;

if($s>=90){
    $g = 'A';
}else if($s>=80){
    $g = 'B';
}else if($s>=70){
    $g = 'C';
}else if($s>=60){
    $g = 'D';
}else{
    $g = 'F';
}
echo $g;
?>