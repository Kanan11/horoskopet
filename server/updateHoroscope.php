<?php 
session_start();
require './horoscopeList.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {
    if(isset($_SESSION ['horoscope']) && isset($_POST['dateOfBirth'])) {
        $result = updateHoroscope($_POST ['dateOfBirth'], true);
        echo json_encode(array('success' => $result));
    } else {
        echo json_encode(array('success' => 'FAIL', 
        'session'=>$_SESSION['horoscope'], 'input'=>$_POST['dateOfBirth']));}
    } else {
        echo json_encode(array('success'=>false));
    }
    ?>