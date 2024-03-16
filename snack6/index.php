<?php
/*
Snack 6
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
        }

        .teachers {
            background-color: grey;
            padding: 10px;
            margin-right: 10px;
        }

        .pm {
            background-color: green;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="teachers">
            <h2>Insegnanti</h2>
            <ul>
                <?php foreach ($db['teachers'] as $teacher): ?>
                    <li><?php echo $teacher['name'] . ' ' . $teacher['lastname']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="pm">
            <h2>PM</h2>
            <ul>
                <?php foreach ($db['pm'] as $pm): ?>
                    <li><?php echo $pm['name'] . ' ' . $pm['lastname']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>


