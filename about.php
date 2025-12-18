<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $docname=get_page_name(); echo $translations->$lang_current->pages->index->meta_desc; ?>">
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="icon" href="/favicon.png" type="image/png">
        <link rel="stylesheet" href="css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- About div -->
            <div class="main__about">

                <p><?php echo $translations->$lang_current->pages->about->about_us; ?></p>
            </div>
        </main>

        <!-- Legal notices -->
        <footer class="footer">
            <a class="footer__legal-notices" href="#"><?php echo $translations->$lang_current->pages->about->legal_notices; ?></a>
        </footer>
    </body>
</html>