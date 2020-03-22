<?php
$numToFind = 150;
$ingrdient=[];
$additionTotal=0;
//checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Pistache' => 3
];
//azdio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
//checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
require 'header.php';



?>
<div class="row">
    <h4>Calculer le prix d'une glace</h4>
</p>
<div class="row">
<div class="col-4">
    <form action="index.php" method="POST" name="glace">
        <h5>Choisissez vos parfum : </h5>
        <?php foreach ($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label for="inputparfum">
                <?= checkbox('parfum', $parfum, $_POST) ?>
                <?= $parfum ?> / <?= $prix ?>€
            </label>
        </div>
        <?php endforeach; ?>
        <h5>Choisissez le contenant : </h5>
        <?php foreach ($cornets as $cornet => $prix): ?>
        <div class="radio">
            <?= radio('cornet',$cornet,$_POST) ?>
            <label for="inputcornet">
                <?= $cornet ?> / <?= $prix ?>€
            </label>
        </div>
        <?php endforeach; ?>
        <h5>Choisissez vos suppléments : </h5>
        <?php foreach ($supplements as $supplement => $prix): ?>
        <div class="checkbox">
            <label for="inputaddons">
                <?= checkbox('supplements', $supplement, $_POST) ?>
                <?= $supplement ?> / <?= $prix ?>€
            </label>
        </div>
        <?php endforeach; ?>
        <input type="hidden" name="addition">
        <button class="btn btn-primary" type="submit">Acheter</button>
    </form>
        </div>
<?php
// traitement du formulaire  acheter une glace
// on check les parfum;
if(isset($_POST['parfum'])){
    $ingrdient[].="<strong>Vous avez choisie le(s) parfums</strong><br>";
    foreach ($_POST['parfum'] as $parfum) {
        if(isset($parfums[$parfum])){
            $ingrdient[].=$parfum; 
            $additionTotal+=$parfums[$parfum];        
        }
    }
    $ingrdient[].="<br>";
}
// on check le contenant;
if(isset($_POST['cornet'])){
    $ingrdient[].="<strong>Le tout dans un </strong><br>";
    foreach ($_POST['cornet'] as $cornette) {
        if(isset($cornets[$cornette])){
            $ingrdient[].=$cornette; 
            $additionTotal+=$cornets[$cornette];        
        }
    }
    $ingrdient[].="<br>";
}
// on check les suppléments

if(isset($_POST['supplements'])){
    $ingrdient[].="<strong>avec supplément(s) de </strong><br>";
    foreach ($_POST['supplements'] as $supp) {
        if(isset($supplements[$supp])){
            $ingrdient[].=$supp; 
            $additionTotal+=$supplements[$supp];        
        }
    }
}

echo "<div class='col-4'>";
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Votre commande</h4>
        <p class="card-text"><?= implode(' ',$ingrdient) ?></p>
    </div>
    <div class="card-footer">
        <p class="card-text">Total :<?= $additionTotal ?> €</p>
    </div>
</div>
<?php


echo "</div></div>";



?>

<?php
require 'footer.php';
?>