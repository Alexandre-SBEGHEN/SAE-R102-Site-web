<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $docname=get_page_name(); echo $translations->$lang_current->pages->e404->meta_desc; ?>">
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="icon" href="/favicon.png" type="image/png">
        <link rel="stylesheet" href="/css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- Intro part -->
            <div class="main__e404 e404">
                <!-- Error text -->
                <div class="e404__e404-div e404-div e404-div--error">
                    <h2 class="e404__title"><?php echo $translations->$lang_current->pages->e404->title; ?></h2>
                    <h3 class="e404__subtitle"><?php echo $translations->$lang_current->pages->e404->subtitle; ?></h3>
                </div>

                <!-- Go back to home button -->
                <div class="e404__e404-div e404-div e404-div--button">
                    <a class="e404__a-button a-button" href="/"><?php echo $translations->$lang_current->pages->e404->back_to_home; ?></a>
                </div>

                <!-- Image of sad Tung Tung Tung Sahur -->
                <div class="e404__e404-div e404-div e404-div--picture">
                    <img width="256" class="e404__picture" src="/assets/images/misc/sad_sahur.avif" alt="<?php echo $translations->$lang_current->pages->e404->sad_sahur_alt; ?>">
                </div>
            </div>
        </main>
    </body>
</html>