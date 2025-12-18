<?php require('init.php'); if (!isset($_GET['brname']) || !in_array($_GET['brname'], $cards_keys)) $name = "ballerina"; else $name = $_GET['brname']; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo 'This is the page dedicated to the ', $cards->$name->name, ' Brainrot character. Learn more about it.' ?>">
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="icon" href="/favicon.png" type="image/png">
        <link rel="stylesheet" href="css/style.css">
        <title><?php echo $cards->$name->name, ' - Brainrot City'; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- Brainrot name -->
            <div class="main__roster-card-title roster-card-title">
                <h2 class="roster-card-title__title"><?php
                    echo $cards->$name->name;
                ?></h2>
            </div>

            <!-- The card -->
            <div class="main__roster-identity roster-identity">
                <!-- Left picture -->
                <div class="roster-identity__pic-left">
                    <img width="256" height="256" class="roster-identity__picture" src="<?php echo 'assets/images/roster/preview/', $name, '.avif'; ?>" alt="<?php echo 'Character ', $cards->$name->name; ?>" loading="lazy">
                </div>

                <!-- The quote -->
                <div class="roster-identity__quote-div">
                    <!-- Og -->
                    <h3 class="roster-identity__h"><?php echo $translations->$lang_current->pages->roster_card->quote_original; ?></h3>
                    <blockquote class="roster-identity__blockquote"><p class="roster-identity__quote"><?php echo $cards->$name->quote; ?></p></blockquote>

                    <!-- Translated -->
                    <h3 class="roster-identity__h"><?php echo $translations->$lang_current->pages->roster_card->quote_translated; ?></h3>
                    <blockquote class="roster-identity__blockquote"><p class="roster-identity__p"><?php echo $translations->$lang_current->pages->roster_card->quotes->$name; ?></p></blockquote>

                    <!-- Author (brainrot name) -->
                    <p class="roster-identity__p"><cite class="roster-identity__cite">— <?php echo $cards->$name->name; ?></cite></p>
                </div>

                <!-- Right picture -->
                <div class="roster-identity__pic-right">
                    <img width="256" height="256" class="roster-identity__picture" src="<?php echo 'assets/images/roster/vertical/', $name, '.avif'; ?>" alt="<?php echo 'Second picture of character ', $cards->$name->name; ?>" loading="lazy">
                </div>
            </div>

            <!-- Go back to other brainrots -->
            <div class="main__other-brainrots-div other-brainrots-div">
                <a class="buttons__a-button a-button a-button" href="roster.php"><?php echo $translations->$lang_current->pages->roster_card->other_brainrots; ?></a>
            </div>
        </main>
    </body>
</html>