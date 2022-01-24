<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

    .gray{

        background-color: gray;

    }

    .green{

        background-color: green;

    }

</style>
    
    <?php 
    
        /*

            Utilizzare questo array: 
            https://pastebin.com/CkX3680A. 
            Stampiamo il nostro array mettendo gli insegnanti 
            in un rettangolo grigio e i PM in un rettangolo 
            verde.

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

    <div> 

        <div class="gray">

                <?php for( $i = 0; $i < count($db["teachers"]) ; $i++){ ?>

                    <span>

                        Nome: <?php echo $db["teachers"][$i]["name"] ?>

                    </span>

                    <br>

                    <span>

                        Cognome: <?php echo $db["teachers"][$i]["lastname"] ?>

                    </span>

                    <br>
                    <br>

                <?php } ?>

        </div>


        <div class="green">

            <?php for( $i = 0; $i < count($db["pm"]) ; $i++){ ?>

                <span>

                    Nome: <?php echo $db["pm"][$i]["name"] ?>

                </span>

                <br>

                <span>

                    Cognome: <?php echo $db["pm"][$i]["lastname"] ?>

                </span>

                <br>
                <br>

            <?php } ?>

        </div>
    
    </div>

</body>
</html>