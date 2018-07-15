<?php
    /* $uploaded = true;
  
    if ($uploaded === true) {
        echo "Uploaded sucess";
    } else {
        echo "something went worng";
    } */
    
/*     $tableAvailable = true;
    if ($tableAvailable === true) {
        echo "Booking available";
    } else {
        echo "Please try a gain";
    }
     */

/*     $tableAvailable = false;
     
    if ($tableAvailable !== true) {
         echo "No table available";
    } else {
         echo "you are wellcome";
    }
      */

  /*   $roomsRequseted = 4;
    $roomsAvailable = 3;

    if ($roomsAvailable < $roomsRequseted) {
        echo "Sorry no  enough rooms availale";
    } else {
        echo "You are wellcom ";
    } */

 /*    $roomsRequseted = 4;
    $roomsAvailable = 5;

    if ($roomsRequseted >= $roomsAvailable) {
        echo "Sorry No rooms available";
    } else {
        echo "You are wellcom";
    } */
    
    $maxRoomsAllowed = 5;
    $roomsRequseted = 4;
    $roomsAvailable = 20;

if (($roomsRequseted >= $roomsAvailable) || ($roomsRequseted >= $maxRoomsAllowed)) {
    echo "Sorry, please select less rooms number";
} else {
    echo "Your book is ready, please complete pyment";
}
