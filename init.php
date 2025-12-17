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
if (page_nameis('roster') || page_nameis('roster_card')) {
    $cards_string = '{
        "ballerina": {
            "name": "Ballerina Cappucina",
            "quote": "Ballerina Cappuccina, mi mi mi mi! È la moglie di Cappuccino Assassino. E ama la musica, la la la la! La sua passione è il Ballerino Lololo."
        },
        "bombombini": {
            "name": "Bombombini Gusini",
            "quote": "Bombombini Gusini! Fratello Bombardiro Crocodilo, che svolge tutte le stesse funzioni del fratello e dà bombe alla gente. Uno scherzo per chi si è trasferito: un georgiano cammina portando due angurie sotto le ascelle, poi un uomo gli chiede: \"Che ore sono?\" \"Ascolta, tieni l\'anguria.\" (...)"
        },
        "brr_patapim": {
            "name": "Brr Brr Patapim",
            "quote": "Brr, brr, Patapim, il mio cappello è pieno di Slim! Nel bosco fitto e misterioso viveva un essere assai curioso. Con radici intrecciate e gambe incrociate, mani sottili, braccia agitate. Il suo naso lungo come un prosciutto, un po\' babbuino, un po\' cespugliotto. (...)"
        },
        "burbaloni": {
            "name": "Burbaloni Luliloli",
            "quote": "Burbaloni Luliloli, Capibarello Coccosini! È molto raro trovare sulle coste di Bali una noce di cocco unica nel suo genere che contenga un capibara al suo interno. Si tratta di un evento molto raro in cui la gente del posto si riunisce attorno a un fuoco e celebra l\'arriva del dio capibara cocco. (...)"
        },
        "cappuccino": {
            "name": "Cappuccino Assassino",
            "quote": "Cappu-cappu-cappuccino Assassino! Assassini cappuccini! Questo killer furtivo si infiltra tra i nemici approffitando de la notte. Attento, oddiatore di caffè! Se non bevi una tazza di cappuccino al mattino, è meglio non incrociare questo tizio."
        },
        "chimpanzini": {
            "name": "Chimpanzini Bananini",
            "quote": "Chimpanzini Bananini! Waa, waa, waa. Bananucci, monkey-monkey-monkeyucci! Or..."
        },
        "cocofanto": {
            "name": "Cocofanto Elefanto",
            "quote": "Cocofanto Elefanto Elefantucci Coconucci! Questo bambino è protetto da una noce di cocco. Insieme non hanno paura di nessuna avversità. Viaggiano nella giungla in cerca di avventure."
        },
        "frulli": {
            "name": "Frulli Frulla",
            "quote": "Frullì Frullà, un pinguino nel deserto che fa \"blá blá blá\". Con antenne sopra il dorso prende la tv. E la tazza di caffè gli fa un cenno così \"Vieni qui mio caro amico bevi un po\' con me\", Ma il pinguino sorride; No fa caldo per il caffè. Continua a ballare con stile elegante nel deserto surreale scena delirante."
        },
        "job_sahur": {
            "name": "Job Job Job Sahur",
            "quote": "Job, Job, Job, Job, Job, Job, Job, Job, Job, Job, Sahur! Job application for you!"
        },
        "la_vacca": {
            "name": "La Vacca Saturno Saturnita",
            "quote": "La Vacca Saturno Saturnita. Defrente tu sei tanto bonita, con il corpo di Saturno, Saturnita. Gli anelli che girano, brillano al cielo, una vacca spaziale senza alcun velo. (...)"
        },
        "lirili": {
            "name": "Lirili Larila",
            "quote": "Lirilì Larilà, elefante nel deserto che cammina qua e là. Con la sua conchiglia e un orologio che fa tic tac, le spine del cactus mi fanno un attacco flashback. Arriva zio Ramon su una mongolfiera blu, gridando: \"Ma che fai lì? Ti piace pure il WiFi, tu?\" Io rispondo senza fiato: \"cerco solo di capire perché un cactus con sandali si possa anche vestire!\""
        },
        "orcalero": {
            "name": "Orcalero Orcala",
            "quote": "Tralalero Tralala? No, no, no, Orcalero Orcala. Scarpa bianca. Splash, Boom, Ah. 1, 2, 3 scarpe, si si si. Orcalero Orcala. Testa dura , stomp da papa."
        },
        "ta_sahur": {
            "name": "Ta Ta Ta Sahur",
            "quote": "a Ta Ta Ta Ta Ta Ta! Sahur!!!! Ada kejadian misterius yang hanya muncui saat sahur. Konon kalau seseorang dippangil Sahur tiga kali tapi nggak nayut makhluk ini bakal datang ke rumahnya. Eee, serem banget. (...)"
        },
        "trippi": {
            "name": "Trippi Troppi",
            "quote": "Trippi Troppi, troppa trippa, tre topi trotterellano tra tromboni tritati, triplicando trottoline tropicali. E chi troppo vuole, nulla trippa!"
        },
        "trulimero": {
            "name": "Trulimero Trulichina",
            "quote": "Trulimero Trulichina, il pretiletine in piscina, formaggio sulla trulalima, ma chi chiama la tazzina?"
        },
        "tung_sahur": {
            "name": "Tung Tung Tung Sahur",
            "quote": "Tung, tung, tung, tung, tung, tung, tung, tung, tung Sahur. Anomali mengerikan yang hanya keluar pada sahur. Konon katanya kalau ada orang yang dipanggil sahur tiga kali dan tidak nyaut, maka makhluk ini datang di rumah kalian. Hiiii, seramnya! (...)"
        },
        "u_din": {
            "name": "U Din Din Din Din Dun",
            "quote": "Udin Din Din Din Dun Ma Din Din Din Dun, merupakan sosok jeruk yang memiliki mata dan mulut. Dulunya, ia hanyalah seorang manusia biasa, karena sering menelan biji jeruk, ia alhasil berubah menjadi Udin Din Din Dun jeruk."
        }
    }';
    $cards = json_decode($cards_string);
    $cards_keys = array_keys(get_object_vars($cards));
}