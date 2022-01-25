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

           Creare un array con 15 numeri casuali, 
           tenendo conto che l’array non dovrà contenere 
           lo stesso numero più di una volta

        */
        
        $num = [];

    ?>

    <?php while( count($num) < 15){ ?>

        <?php $cNum = rand( 1, 15 ); ?>

        <?php if( !in_array( $cNum, $num ) ){ ?>

            <?php $num[] = $cNum; ?>

        <?php } ?>

    <?php } ?>

    <?php var_dump($num); ?>

</body>
</html>