<?php
if (isset($_REQUEST['dr'])) {
    $yourday = explode('.', $_REQUEST['dr']);
    $now = time();
    $dr = mktime(23, 59, 59, $yourday[1], $yourday[0]) + 1;
    if ($dr > $now) {
        echo floor(($dr - $now) / 60 / 60 / 24) . ' Dней осталось ';
    } else {
        echo floor(($dr - $now + 60 * 60 * 24 * 365) / 60 / 60 / 24) . ' Dней осталось ';
    }
}
?>