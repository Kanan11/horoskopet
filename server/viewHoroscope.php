<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (isset($_SESSION['horoscope'])){
        echo json_encode(array($_SESSION['horoscope']));
    } else {
        echo json_encode(array());
    }
}
?>