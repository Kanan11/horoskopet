<?php
try {
    session_start();
    if(isset($_SERVER["REQUEST_METHOD"])){
        if($_SERVER["REQUEST_METHOD"] === "GET") {
                echo json_encode("Test Svar");
        }else if ($_SERVER["REQUEST_METHOD"] === "POST"){

        }else {
            throw new Exception("Not a valid request method", 405);
        }
    }
}catch(Exception $error) {
    echo json_encode(
        array(
            "Message" => $error -> getMessage(),
            "Status" => $error -> getCode()
        )
    );
}


?>