<?php

$hourOfDay = date('H');

if($hourOfDay < 12) {
    $message = "Good Morning, Hi this is Syed Ausaf Haider ";
} elseif($hourOfDay > 11 && $hourOfDay < 18) {
    $message = "Good Afternoon, Hi this is syed Ausaf Haider";
} elseif($hourOfDay > 17){
    $message = "Good Evening, Hi this is Syed Ausaf Haider";
}

echo $message;

?>
