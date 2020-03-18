<?php
/*
echo "Cherchons un palimdrome (mot identique dans les deux sens\n";
palindrom();

// vérification si palindrome

function palindrom(){
    
    while(true){
        $word=strtolower(readline("Entrez un mot :"));
        if(strtolower(strrev($word))===$word){
            echo $word." est un palimdrome.\n";
        break;
        }else {
            echo $word." n'est pas un palimdrome.\n";        
            }
    }   
}
// calcul de moyenne 

$notelist=[];
echo "\nCacul de moyenne\n\n";
while(true){
    $notelist[]=(int)readline("entrez une valeur :");
    $action = readline("Entrez une nouvelle note ? (o/n)");
    if($action==="n"){
        moyenne($notelist);
    break;
    }
}
function moyenne($notes){
    $somme = array_sum($notes);
    $nb_rec = count($notes);
    echo "la moyenne des notes est de ".round($somme/$nb_rec,1)."\n";
}
*/
// insulte checker
echo "\n Fonction pour checker si la phrase contient des insultes \n";
$insultes=['merde','cul','con','salope','imbécile','i'];

    foreach($insultes as $insulte){
        $replace[] = substr($insulte,0,1).str_repeat('*',strlen($insulte)-1);
    }
    $phrase=strtolower(readline("Entrez votre texte:"));
    $phrase=str_replace($insultes,$replace,$phrase);
    echo $phrase.'\n';






?>