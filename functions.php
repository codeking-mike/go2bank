<?php

function truncateString($string, $length = 20, $suffix = '...') {
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . $suffix;
    } else {
        return $string;
    }
}

?>