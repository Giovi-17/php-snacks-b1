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

        Creiamo un array contenente le partite 
        di basket di un’ipotetica tappa del 
        calendario. Ogni array avrà una squadra 
        di casa e una squadra ospite, punti fatti 
        dalla squadra di casa e punti fatti dalla 
        squadra ospite. Stampiamo a schermo tutte 
        le partite con questo schema.

        Olimpia Milano - Cantù | 55-60

        */

        $match = [

            [

                "squadraCasa" => "Miami Heat",
    
                "squadraOspite" => "Los Angeles Lakers",
                
                "punteggioCasa" => 113,
    
                "punteggioOspite" => 107

            ],

            [

                "squadraCasa" => "Orlando Magic",
    
                "squadraOspite" => "Chicago Bulls",
                
                "punteggioCasa" => 114,
    
                "punteggioOspite" => 95

            ],

            [

                "squadraCasa" => "Toronto Raptors",
    
                "squadraOspite" => "Portland Trail Blazers",
                
                "punteggioCasa" => 105,
    
                "punteggioOspite" => 114

            ],

            [

                "squadraCasa" => "Charlotte Hornets",
    
                "squadraOspite" => "Atlanta Hawks",
                
                "punteggioCasa" => 91,
    
                "punteggioOspite" => 113

            ],

        ];
    
    ?>

    <h1>Partite di Basket</h1>

    <span><?php for( $i = 0; $i < count($match) ; $i++ ){ ?> 
        
          <?php $contatore = $match[$i] ?> 
          
          <div>

          <?php echo $contatore["squadraCasa"] ?> - <?php echo $contatore["squadraOspite"] ?> | <?php echo $contatore["punteggioCasa"] ?> - <?php echo $contatore["punteggioOspite"] ?>

          </div>
    
          <?php } ?>
    
    </span>

</body>
</html>