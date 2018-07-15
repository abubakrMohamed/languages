<?php

/*     function fullName($firstName, $lastName) {
        return "{$firstName}  {$lastName}";
    }

    echo fullName('ali', 'alser'); */

    function fullName($firstName = null, $lastName = null, $sepretor = '_') {
        if (trim($firstName) === '' || null) {
            return "Please Enter proper name";
        } elseif ($lastName === null) {
            return "your first name is: {$firstName}";
        } else {
            return "your full name is: {$firstName}{$sepretor}{$lastName}";
        }
         
    }

    echo fullName();