<?php

/*
SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60


*/

$teams = [
    [
    "home_team" => "Napoli",
    "away_team" => "Roma",
    "score_home" => rand(1, 90),
    "score_away" => rand(1, 90),
    ],
    [
    "home_team" => "Bari",
    "away_team" => "Torino",
    "score_home" => rand(1, 90),
    "score_away" => rand(1, 90),
    ],
    [
    "home_team" => "Cagliari",
    "away_team" => "Messina",
    "score_home" => rand(1, 90),
    "score_away" => rand(1, 90),
    ],
    [
    "home_team" => "Milano",
    "away_team" => "Firenze",
    "score_home" => rand(1, 90),
    "score_away" => rand(1, 90),
    ]
    ];


foreach ($teams as $team ){
    // var_dump($team);
    echo $team['home_team'] . " - " . $team['away_team'] . " | " . $team['score_home'] . " - " . $team['score_away'];
};







?>