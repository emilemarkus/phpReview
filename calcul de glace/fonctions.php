<?php

function nav_item($linkAdress, $linkLabel, $linkClass)
{
    $classe = 'nav-item';
    if (basename($_SERVER['PHP_SELF']) === $linkAdress) {
        $classe .= " active";
    }
    return <<<HTML
   <li class="$classe">
        <a class="$linkClass" href="$linkAdress">$linkLabel</a>
    </li>
HTML;
}

function nav_menu($classMenu = '')
{

    return
        nav_item('index.php', 'Accueil', $classMenu) .
        nav_item('contact.php', 'Contact', $classMenu);
}

function returnErrorMessage($message, $class){

    return <<<ME
    <div class="alert alert-dismissible fade show $class" role="alert">
        $message
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
ME;

}


// function qui réalise les checkbox
function checkbox(string $name, string $value, array $data){
    $attribute= '';
    if (isset($data[$name])&& in_array($value,$data[$name])){
        $attribute.=" checked";
    }
    return <<<HTML
    <input type='checkbox' name='{$name}[]' value='$value' $attribute>
HTML;    
}
// function qui réalise les radios
function radio($name,$value,$data){
    $attribute= '';
    if (isset($data[$name])&& in_array($value,$data[$name])){$attribute.=" checked";}
    return <<<HTML
    <input type='radio' name='{$name}[]' value='$value' $attribute>
HTML;    

}

function dump($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}
