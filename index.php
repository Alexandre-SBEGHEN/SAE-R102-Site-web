<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body--index">
        <!-- Menu de navigation -->
        <?php require('navbar.php'); ?>

        <!-- Contenu de la page -->
        <main class="home-main">

            <!-- Section titre -->
            <section class="home-main__index-sec-title index-sec-title">
                <!-- Écran titre -->
                <div class="index-sec-title__hello hello">
                    <h2 class="hello__title"><?php echo $translations->$lang_current->pages->index->title; ?></h2>
                    <h3 class="hello__subtitle"><?php echo $translations->$lang_current->pages->index->subtitle; ?></h3>
                </div>

                <!-- Les 3 images -->
                <div class="index-sec-title__intro-pictures intro-pictures">
                    <img class="intro-pictures__img" src="assets/images/roster/preview/bombardiro_crocodilo.webp" alt="Bombardiro Crododilo">
                    <img class="intro-pictures__img" src="assets/images/roster/preview/brr_patapim.webp" alt="Brr Brr Patapim">
                    <img class="intro-pictures__img" src="assets/images/roster/preview/tung_sahur.webp" alt="Tung Tung Tung Sahur">
                </div>
            </section>





        </main>
    </body>
</html>