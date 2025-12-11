<?php

//Initialiser le fichier de traductions des textes
require('translations.php');

//Fonction pour obtenir le nom du script actuel
function get_script_name() {
    $script_name = $_SERVER['PHP_SELF'];
    $script_name_len = strlen($script_name);

    $borne_min = $script_name_len - 1;
    
    while ($script_name[$borne_min] != '/') {
        $borne_min --;
    }
        

    $script_name = substr($script_name, $borne_min + 1, $script_name_len - $borne_min - 1);
    return $script_name;
}

//Fonction pour obtenir le nom de la page actuelle
function get_page_name() {
    $script_name = get_script_name();
    $script_name_len = strlen($script_name);

    $script_name = substr($script_name, 0, $script_name_len - 4);

    return $script_name;
}

//Prédicat pour savoir si la page actuelle vaut ...
function page_nameis($name) {
    return get_page_name() == $name;
}