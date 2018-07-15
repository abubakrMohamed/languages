<?php
    $weather = "sunny";
    $colour = "";

    switch (true) {
        case $weather == 'sunny':
            $colour = 'yellow';
            break;

        case ($weather == 'cloudy'):
            $colour = 'grey';
            break;
        
        default:
            $colour = 'unknown';
            break;
    }

    echo $colour;