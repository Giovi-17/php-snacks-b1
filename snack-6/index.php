<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        /*

            Creare un array contenente qualche alunno di 
            un’ipotetica classe. Ogni alunno avrà Nome, 
            Cognome e un array contenente i suoi voti scolastici. 
            Stampare Nome, Cognome e la media dei voti di 
            ogni alunno.

        */

        $alunno = [

            [

                "nome" => "x",
                "cognome" => "y",
                "voti" => [5, 7, 9, 4, 6]

            ],

            [

                "nome" => "x1",
                "cognome" => "y1",
                "voti" => [9, 3, 9, 2, 8]

            ],

            [

                "nome" => "x2",
                "cognome" => "y2",
                "voti" => [4, 8, 6, 3, 9]

            ],

            [

                "nome" => "x3",
                "cognome" => "y3",
                "voti" => [2, 9, 4, 7, 6]

            ],

        ]

    ?>

    <?php for( $i = 0; $i < count($alunno); $i++ ){ ?>

        <div>

            <span>Nome: <?php echo $alunno[$i]["nome"] ?> - </span>

            <span>Cognome: <?php echo $alunno[$i]["cognome"] ?> - </span>

            <span>Media Voti: 

                <?php $somma = 0; ?>

                <?php for( $j = 0; $j < count($alunno[$i]["voti"]); $j++ ){ ?>

                    <?php 

                        $somma += $alunno[$i]["voti"][$j];

                    ?>

                    <?php $media = $somma / count($alunno[$i]["voti"]); ?>

                <?php } ?>

                <?php echo round($media, 1) ?>
        
            </span>

        </div>

    <?php } ?>

</body>
</html>