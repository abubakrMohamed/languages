<?php

/*     $names = [
        'firstName' =>'ali',
        'secondName' => 'omer',
        'thirdName' => 'khaled',
        'third' => 'othman'
        ];
    
    //    for ($i=0; $i < count($names); $i++) { 
    //    echo $names[$i] .'<br/>';
    //}

    foreach ($names as $index => $value) {
        echo "the index of {$value} is {$index}<br>";
    }
 */
    $topics = [
        [
            'id' => 1,
            'title' => 'The best way to lern PHP?',
            'posts' => [
                ['body' => 'Practice a lot!'],
                ['body' => 'Work on project.']
            ]
            ],
        [
            'id' => 2,
            'title' => 'How do I use for each loop?',
            'posts' => [
                ['body' => 'read more articles!'],
                ['body' => 'watch video tutorial.']
            ]
        ]
            ];


/*         foreach ($topics as $key => $topic) {
            foreach ($topic as $key => $value) {
                echo "{$key}: {$value}";
            }
        } */
    
    foreach ($topics as $key => $topic) {
        echo "<h3> {$topic['title']} </h3>";
        foreach ($topic['posts'] as $key => $post) {
            //echo "<h3> {$topic['title']} </h3>";
            echo "<p> {$post['body']} </p>";
        }
    }

