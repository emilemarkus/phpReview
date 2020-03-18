<?php



//function demande si continue ou pas 
// return boleen (true/false)
function continuOrNot($phrases="Faites votre choix")
{
    while (true) {
        echo "\n".$phrases."\n";
        $ifcontinue = readline("Voulez-vous continuez ? (o/n) ");
        if ($ifcontinue === 'o') {
            return true;
        } elseif ($ifcontinue === 'n') {
            return false;
        }
    }
}

// function qui demande le crenau
// return un tableau a deux elements int ex:[8,12]
function askCreneaux($phrase="veuillez entrez un creneau"){
        echo "\n".$phrase."\n";
        // on demande l'heure d'ouverture;
        while(true){
            $ouverture = (int)readline("Indiquez l'heure d'ouverture : ");
            if($ouverture>0 && $ouverture<23){
            break;
            }
        }
        while(true){
            $fermeture = (int)readline("Indiquez l'heure de fermeture : ");
            if($fermeture>0 && $fermeture<23 && $fermeture>$ouverture){
            break;
            }
        }
        return [$ouverture,$fermeture];
}


// function makeHoraire
// return horaire array
function returnHoraire($phrase="Veuillez entrez vos Horaires") {
    $horaire=[];
    $continue = true;
    while($continue){
        $horaire[] = askCreneaux();
        $continue = continuOrNot();
        if($continue===false){
        return $horaire;
        }
    }
}
//test the all function
//var_dump(returnHoraire());
