<?php
    $a = $_REQUEST['vvod1'];
    $b = $_REQUEST['vvod2'];
    for($i = 1; $i <= $a; $i++) {
        if(($a % $i == 0) and ($b % $i == 0)) {
            $arr[] = $i;
        }}
        echo " Общие делители ".$a." и ".$b.": ".implode(', ', $arr);
?>