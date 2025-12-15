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

//Initialiser les cartes de brainrots
if (page_nameis('roster')) {
    $cards_string = '[
        {
            "name": "ballerina",
            "label": "Ballerina Cappucina"
        },
        {
            "name": "bombombini",
            "label": "Bombombini Gusini"
        },
        {
            "name": "brr_patapim",
            "label": "Brr Brr Patapim"
        },
        {
            "name": "burbaloni",
            "label": "Burbaloni Luliloli"
        },
        {
            "name": "cappuccino",
            "label": "Cappuccino Assassino"
        },
        {
            "name": "chimpanzini",
            "label": "Chimpanzini Bananini"
        },
        {
            "name": "cocofanto",
            "label": "Cocofanto Elefanto"
        },
        {
            "name": "frulli",
            "label": "Frulli Frulla"
        },
        {
            "name": "job_sahur",
            "label": "Job Job Job Sahur"
        },
        {
            "name": "la_vacca",
            "label": "La Vacca Saturno Saturnita"
        },
        {
            "name": "lirili",
            "label": "Lirili Larila"
        },
        {
            "name": "orcalero",
            "label": "Orcalero Orcala"
        },
        {
            "name": "ta_sahur",
            "label": "Ta Ta Ta Sahur"
        },
        {
            "name": "trippi",
            "label": "Trippi Troppi"
        },
        {
            "name": "trulimero",
            "label": "Trulimero Trulichina"
        },
        {
            "name": "tung_sahur",
            "label": "Tung Tung Tung Sahur"
        },
        {
            "name": "u_din",
            "label": "U Din Din Din Din Dun"
        }
    ]';
    $cards = json_decode($cards_string);
}