<?php
// function for the menu navigation
if (!(function_exists('nav_item'))) {
    function nav_item($linkAdress, $linkLabel,$linkClass)
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
}
?>

<?= nav_item('index.php', 'Accueil',$class); ?>
<?= nav_item('contact.php', 'Contact',$class); ?>  