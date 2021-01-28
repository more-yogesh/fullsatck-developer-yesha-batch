<?php
// Numeric
// $india = [100, 2, 400, 5];
// Associative Array
// $india = ['sachin' => 200, 'kohli' => [100, 50]];
$india = ['sachin' => 200, 'kohli' => 50, 'sehawag' => 150];

foreach ($india as $batsman => $score) {
    echo '<h4 id="">Today ' . $batsman . 'score is ' . $score . '</h4>';
}



// echo "<pre>";
//print_r($india['kohli'][1]);
// echo "MY Name IS YOGESH";
// print_r("Hello World");
