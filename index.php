<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/print.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Varela+Round&display=swap" rel="stylesheet">
    <title>Logiciel Classement</title>
</head>

<body>

    <header>
    <h1>SPEED Classement <span>2.0</span></h1>
   
    </header>
<div class="container__appli">

    <?php require './boucleFor.php' ?>
    
    <div class="container__tableau">
        <div class="conainer__h2">
            <?php if(!empty($_POST['Categorie'])){?>
                <h2><?php echo ($_POST['Categorie']);?></h2> <?php } ?>
        </div>
    
                    <table>
                        <thead>
                    <?php if(!empty($_POST['cso'])){?>
                            <tr>
                                <th>Rank</th>
                                <th>Nom</th>
                                <th>Chrono</th>
                                <th>Nb.Fautes</th>
                                
                            </tr> 
                                <?php } ?>
                        </thead>
                        <tbody>

                                <?php
                            if(empty($_POST['cso'])) {$_POST['cso'] = null;}
                            $point = 10;
                            $rank = 1;
                            if(!empty($_POST['cso'])) {

                            asort($_POST['cso']);
                            foreach ($_POST['cso'] as $index) {
                            if ($index['faute'] == 9) { $index['faute'] = "éliminé";} ?>

                            <tr>
                                <td><?php echo $rank;?></td>
                                <td><?php echo$index['nom'];?></td>
                                <td><?php echo $index['chrono'];?></td>
                                <td><?php echo $index['faute']?></td>
                                
                            </tr>
                            <?php $rank = $rank +1;
                                    if ($point > 1){ $point = $point - 1; }
                                    else $point = null;} }?>

                        </tbody>
                    </table>

   
</div>

</body>
</html>