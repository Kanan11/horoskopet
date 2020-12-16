<?php
require "./saveSession.php";
function updateHoroscope($dateOfBirth) {
    $dateOfBirth = new DateTime($dateOfBirth);
    $month = $dateOfBirth->format('m');
    $day = $dateOfBirth->format('d');
    if (($month == 1 && 20 <= $day) || ($month == 2 && 18 >= $day)){
        return saveSession("Vattumannen", true);
    }
    else if (($month == 2 && 19 <= $day) || ($month == 3 && 20 >= $day)){
        return saveSession("Fiskarna", true);
    }
    else if (($month == 3 && 21 <= $day) || ($month == 4 && 19 >=$day)){
        return saveSession("Väduren", true);
    }
    else if (($month == 4 && 20 <= $day) || ($month == 5 && 21 >= $day)){
        return saveSession("Oxen", true);
    }
    else if (($month == 5 && 22 <= $day) || ($month == 6 && 21 >= $day)){
        return saveSession("Tvillingarna", true);
    }
    else if (($month == 6 && 22 <= $day) || ($month == 7 && 22 >= $day)){
        return saveSession("Kräftan", true);
    }
    else if (($month == 7 && 23 <= $day) || ($month == 8 && 22 >= $day)){
        return saveSession("Lejonet", true);
    }
    else if (($month == 8 && 23 <= $day) || ($month == 9 && 22 >= $day)){
        return saveSession("Jungfrun", true);
    }
    else if (($month == 9 && 23 <= $day) || ($month == 10 && 22 >= $day)){
        return saveSession("Vågen", true);
    }
    else if (($month == 10 && 23 <= $day) || ($month == 11 && 22 >= $day)){
        return saveSession("Skorpionen", true);
    }
    else if (($month == 11 && 23 <= $day) || ($month == 12 && 21 >= $day)){
        return saveSession("Skytten", true);
    }
    else if (($month == 12 && 22 <= $day) || ($month == 1 && 19 >= $day)){
        return saveSession("Stenbocken", true);
    } 
}
?>