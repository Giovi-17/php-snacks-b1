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

            Prendere un paragrafo abbastanza lungo, 
            contenente diverse frasi. Prendere il paragrafo 
            e suddividerlo in tanti paragrafi. Ogni punto un 
            nuovo paragrafo.

        */

        $lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi officiis consectetur quam. Enim quaerat tempora iste beatae suscipit obcaecati mollitia atque rerum sint voluptates doloribus consequuntur. non aspernatur provident consequatur.";

        $arrayLorem = explode( ".", $lorem );

    ?>

    <div> 

        <?php for( $i = 0; $i < count($arrayLorem); $i++ ){ ?> 
    
            <?php if(!empty($arrayLorem[$i])){ ?>

                <p>

                    <?php echo trim($arrayLorem[$i]); ?>

                </p>

            <?php } ?>

        <?php }; ?>
    
    </div>

</body>
</html>