<?php
$findBirthDate = (0);

function findBirthDate ($_POST) {
    if($_POST == 10) {
        return;
    }
findBirthDate($_POST++);
}
?>