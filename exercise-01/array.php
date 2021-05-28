<?php

$arrays = [
    'musicals' => [
        'Oklahoma', 'The Music Man', 'South Pacific'
    ],
    'dramas' => [
        'Lawrence of Arabia', 'To Kill a Mockingbird', 'Casablanca'
    ],
    'mysteries' => [
        'The Maltese Falcon', 'Rear Window', 'North by Northwest'
    ]
];

foreach ($arrays as $key => $movies) {
    echo strtoupper($key). '<br>';
    foreach ($movies as $movieKey => $movie) {
        echo "----> $movieKey = $movie <br>";
    }
}

arsort($arrays);
echo '<br>';
foreach ($arrays as $key => $movies) {
    echo $key. '<br>';
    foreach ($movies as $movieKey => $movie) {
        echo "----> $movieKey = $movie <br>";
    }
}