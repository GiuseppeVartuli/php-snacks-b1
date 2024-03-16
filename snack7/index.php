<?php


/*
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$students = [
    [
        "name" => "Giuseppe",
        "lastname" => "Vartuli",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
    [
        "name" => "Paolo",
        "lastname" => "Rossi",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
    [
        "name" => "Eden",
        "lastname" => "Hazard",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
    [
        "name" => "Carlo",
        "lastname" => "Cracco",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
    [
        "name" => "Frank",
        "lastname" => "Lampard",
        "votes" => [1, 2, 2, 3, 1, 3],
    ],
];


foreach ($students as $student) {
    // var_dump($student);
    echo '<div>';
    echo $student['name'] . ' ' . $student['lastname'] . ' | votes avg: ' . array_sum($students[2]["votes"]) / count($students[2]["votes"]) ;
    echo '</div>';
}


// var_dump(array_sum($students[2]["votes"]) / count($students[2]["votes"]));



?>