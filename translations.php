<?php

//Initialiser le JSON
$translations_string = '{
    "en": {
        "docname": {
            "404": "Error 404",
            "index": "Brainrot City",
            "history": "History - Brainrot City",
            "roster": "Roster - Brainrot City",
            "generator": "Generator - Brainrot City",
            "about": "About - Brainrot City"
        },
        "navbar": {
            "logo_alt": "Website\'s logo",

            "links": ["Home", "History", "Roster", "Generator", "About"],
            "flag-alt": ["Flag of the UK", "Flag of France"]
        },
        "pages": {
            "index": {
                "title": "BRAINROT",
                "subtitle": "Welcome to our website!"
            },
            "history": {
                "title": "WHAT?",
                "subtitle": "When, and where?",
                "learn_more": "Learn more",
                "browse": "Browse"
            }
        }
    }
}';
$translations = json_decode($translations_string);

//Démarrer la session
session_start();

//Langage par défaut
define('DEFAULT_LANGUAGE', 'en');

//Langages supportés par le site
$lang_suppported = ['en'];

//Vérifier si le paramètre de langue existe et si sa valeur se trouve dans les langages supportés
if (isset($_GET['lang']) && in_array($_GET['lang'], $lang_suppported)) {
    $_SESSION['lang'] = $_GET['lang'];
}

//Changer la langue actuelle pour la 'lang' de la session, ou la langue par défaut si elle n'est pas définie
$lang_current = $_SESSION['lang'] ?? DEFAULT_LANGUAGE;
