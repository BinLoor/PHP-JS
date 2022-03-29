<?php
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $stroka = mb_strlen($str, 'utf-8');
    $word = count(explode(' ', $str));
    $space = $word - 1;
    echo 'Здесь '.$space. ' пробелов, '.$word.' слов, '.$stroka.' символов.';
}
?>