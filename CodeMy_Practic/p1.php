<?php
    $a = $_REQUEST['vvod'];
    for($i = 1; $i <= $a; $i++) {
        if($a % $i == 0) {
            $arr[] = $i;
        }}
        echo "Делители числа ".$a.": ".implode(', ', $arr);
?>