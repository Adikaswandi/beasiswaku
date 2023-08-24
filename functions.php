<?php

//fungsi validasi ipk
function isDisabled($ipk) {
    if ($ipk < 3) {
        return true;
    } else {
        return false;
    }
}

?>