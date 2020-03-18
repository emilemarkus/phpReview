<?php
$creneaux=[];

// demander d'entrer un creneau matin et apres midi
while(true){
    
    $debut = (int)readline("Entrez l'heure d'ouverture :");
    $fin = (int)readline("Entrez l'heure de fermeture :");
    if($debut>=$fin){
        echo "L'heure d'ouverture ne peut pas être plus grande que la fermeture";
    }else {
        $creneaux[]=[$debut,$fin];
        $action = readline('voulez-vous entrer un nouveau creneau ? (o/n) ');
        if($action === 'n'){
            break;
        }
    }
}

$visite=(int)readline("Vous souhaitez passez vers quelle heure ?");
$status=false;
foreach($creneaux as $creneau => $hours){ 
   if($visite>$hours[0] && $visite<$hours[1]){
        $status=true;
   }
}
if($status){
    echo "Nous saurons heureux de vous reçevoir";
}else {
    echo "Désolé nous serons fermé";
}

// encore un ou pas ?


?>