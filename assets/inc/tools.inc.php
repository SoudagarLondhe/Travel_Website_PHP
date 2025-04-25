<?php
    function sanitize($str, $length=50) {
        $str = trim($str);
        $str = htmlentities($str, ENT_QUOTES);
        return substr($str, 0, $length);
    }
?>
