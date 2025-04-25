<!-- Tools PHP file (used for sanitize user's input) -->
<?php
    function sanitize($str, $length=50) {
        $str = trim($str);
        $str = htmlentities($str, ENT_QUOTES);
        return substr($str, 0, $length);
    }
?>
