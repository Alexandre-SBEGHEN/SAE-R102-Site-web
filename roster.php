<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $translations->$lang_current->pages->roster->meta_desc; ?>">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- Title & -->
            <div class="main__roster-presentation roster-presentation">
                <h2 class="roster-presentation__title"><?php echo $translations->$lang_current->pages->roster->title; ?></h2>
                <h3 class="roster-presentation__subtitle"><?php echo $translations->$lang_current->pages->roster->subtitle; ?></h3>
            </div>

            <!-- The roster -->
            <div class="main__roster roster">
                <?php
                
                echo "\t";
                for ($i = 0; $i < count($cards_keys); $i++) {
                    $name = $cards_keys[$i];
                    $label = $cards->$name->name;

                    echo '<a class="roster__roster-card roster-card" href="roster_card.php?brname=', $name,'">', "\n\t\t\t\t\t";
                    echo '<div class="roster-card__div">', "\n\t\t\t\t\t\t";
                    
                    echo '<img class="roster-card__picture" src="assets/images/roster/preview/', $name, '.avif" alt="', $translations->$lang_current->pages->roster->card_alt, $label,'" loading="lazy">', "\n\t\t\t\t\t\t";
                    echo '<p class="roster-card__name">', $label, '</p>', "\n\t\t\t\t\t";

                    echo '</div>', "\n\t\t\t\t";            
                    echo '</a>', ($i < count($cards_keys)-1) ? "\n\t\t\t\t" : "\n";
                }
                
                ?>
            </div>
        </main>
    </body>
</html>