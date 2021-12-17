<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
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


    $dbKeys = array_keys($db);
    var_dump($dbKeys);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 6</title>
</head>
<body>

    <div style="background-color: grey;" class="teachers">

    <h2>
        <?php echo $dbKeys[0] ?>
    </h2>

        <p>
            <?php
                for ($i = 0; $i < count($db[$dbKeys[0]]); $i++) {
                    echo $db[$dbKeys[0]][$i]['name'].$db[$dbKeys[0]][$i]['lastname'].'<br>'; 
                }
            ?>
        </p>

    </div>

    <div style="background-color: green;" class="pm">
        <h2>
            <?php echo $dbKeys[1] ?>
        </h2>

        <p>
            <?php
                for ($i = 0; $i < count($db[$dbKeys[1]]); $i++) {
                    echo $db[$dbKeys[1]][$i]['name'].$db[$dbKeys[0]][$i]['lastname'].'<br>';
                }
            ?>
        </p>

    </div>
    
</body>
</html>

