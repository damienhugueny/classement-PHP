<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    



<?php




$cso1 = [  
           "toto" => [0,'013025'],
           "baba" => [8,'000300'],
           "titi" => [0,'012225'],
           "damien" =>[4,'013525'],
           "tata" => [4,'011020'],
           "lolf" => [8,'000020'], 
           "totdo" => [0,'013025'],
           "babsa" => [8,'000300'],
           "titfi" => [0,'012225'],
           "damiqen" =>[4,'013525'],
           "tddvataf" => [4,'011020'],
           "lodvlof" => [9,'000020'],
           "davdmiqen" =>[4,'013525'],
           "tatdvaf" => [4,'011020'],
           "loldvof" => [8,'000020']
           
];?>

        <ul>



            <?php
            $point =10;
            
            asort ($cso1);
            foreach ($cso1 as $participant =>$donné){?>

            <?php if ($donné[0] == 9) { $donné[0] = "éliminé";} ?>


                    <li>
                    <?php echo $point . "NOM :" . PHP_EOL . $participant  . "temp:" . PHP_EOL . $donné[1] . "Nombre de Faute:" . PHP_EOL . $donné[0];

                    if ($point > 1){
                    $point = $point - 1;
                    }
                    else $point = null;
                     ?> 
                    </li>
            <?php } ?>

        </ul>






</body>
</html>

