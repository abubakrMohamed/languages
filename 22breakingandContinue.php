<?php

include_once('common.php');    
/* $users = [
        ['username' => 'ahmed'],
        ['username' => 'omer'],
        ['username' => 'othman'],
        ['username' => 'ali'],
        ['username' => 'khalid'],
        ['username' => 'said'],
        ['username' => 'zaid'],
        ['username' => 'naser'],
        ['username' => 'osama']
     ];

    print_r($users);
    $tofind = 'osama0';
    $result = '';
    foreach ($users as $key => $user) {
        if ($user['username'] === $tofind) {
            $result = $user['username'];
            break;
        } else {
           echo "<br> {$user['username']}";
        }
    }
    
    if (!($result == null)) {
        echo "<br> this is the result we search for <b>{$result}</b>";
    } else {
        echo "<br> unfortunatly <b>NO</b> <del>{$tofind}</del> was found";
    } */

    $users = [
        [
            'username' => 'omer',
            'likes' => ['apple', 'orange']
        ],
        [
            'username' => 'othman',
            'likes' => ['banana', 'apple', 'orange']
        ],
        [
            'username' => 'ali',
            'likes' => ['dates', 'banana', 'apple']
        ]
        ];

        $search = 'apple';
        $result = null;

        foreach ($users as $key => $user) {
            foreach ($user['likes'] as $key => $like) {
                if ($like === $search) {
                    $result[] = $user;
                    break 1;
                }
            }
        }

        if (!($result == null)) {
            print_rpre($result);
        } else {
            echo "<br> unfortunatly <b>NO</b> <del>{$search}</del> was found";
        }
        

