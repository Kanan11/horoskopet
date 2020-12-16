<?php 
function saveSession ($horoscope) {
    if (!isset($_SESSION['horoskop']) || true) {
        $_SESSION['horoscope'] = $horoscope;
        return 'Success';
    } else {
        return 'Fail';
    }
}
?>