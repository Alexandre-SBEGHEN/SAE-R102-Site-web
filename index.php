<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $docname=get_page_name(); echo $translations->$lang_current->pages->index->meta_desc; ?>">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style-alt.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- Homescreen -->
            <div class="main__homescreen homescreen">
                <!-- Welcome text -->
                <div class="homescreen__homescreen-div homescreen-div--welcome">
                    <h2 class="homescreen__title"><?php echo $translations->$lang_current->pages->index->title; ?></h2>
                    <h3 class="homescreen__subtitle"><?php echo $translations->$lang_current->pages->index->subtitle; ?></h3>
                </div>

                <!-- The 3 images -->
                <div class="homescreen__homescreen-div homescreen-div--pictures">
                    <img width="256" class="homescreen__picture" src="assets/images/roster/preview/chimpanzini.avif" alt="Chimpanzini Bananini">
                    <img width="256" class="homescreen__picture" src="assets/images/roster/preview/brr_patapim.avif" alt="Brr Brr Patapim">
                    <img width="256" class="homescreen__picture" src="assets/images/roster/preview/tung_sahur.avif" alt="Tung Tung Tung Sahur">
                </div>
            </div>
        </main>
    </body>
</html>