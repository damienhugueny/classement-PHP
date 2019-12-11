<div class ="container__partant">
    <form action="./index.php" method="post">

        <div class="partant">
            
                    <label for="nbparticipant">Nombre de partants:</label>
                    <input type="number" id="nbparticipant" name="nbparticipant" required/>
                
                    <button>Valider</button>
        </div>

       

    </form>
</div>


<?php if(empty($_POST['nbparticipant'])) {$_POST['nbparticipant'] = 0;}?>

<form action="./index.php" method="post">

<?php for ($nombre = 0; $nombre < $_POST['nbparticipant']; $nombre = $nombre+1){ 
    $nombre ?>

        <div class="formulaire">
            <label for="faute">Nombre de fautes :</label>
            <input name="cso[<?php echo $nombre;?>][faute]" id="faute"/>

            <label for="chrono">Chrono :</label>
            <input name="cso[<?php echo $nombre?>][chrono]" id="chrono"/>

            <label for="name">Cavalier :</label>
            <input name="cso[<?php echo $nombre?>][nom]" id="Nom"/>
        </div>

<?php } ?>

    <?php if($nombre != null){?>
        
    <div class="bouton__valider">

        <label for="Categorie">Nom de l'épreuve</label>
        <input type="text" id="Categorie" name="Categorie" required/>

        <input type="radio" id="Choice1" name="validation" value="choice1" required/>
        <label for="Choice1">I'm READY!!!</label>
                
        <input type="submit" value="valider"> 
            
    </div> <?php } ?>

       
    </div>
   
    </form>