<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $docname=get_page_name(); echo $translations->$lang_current->pages->index->meta_desc; ?>">
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="icon" href="/favicon.png" type="image/png">
        <link rel="stylesheet" href="css/<?php
            echo ($site_theme == 'normal') ? 'style' : 'style-alt';
        ?>.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>

        <!-- Page main content -->
        <main class="main">
            <!-- About -->
            <div class="main__about about">
                <!-- Who are we title -->
                <div class="about__about-div-title about-div-title">
                    <h2><?php echo $translations->$lang_current->pages->about->about_us; ?></h2>
                </div>

                <!-- Infos -->
                <div class="about__about-div-infos about-div-infos">
                    <!-- Presentation -->
                    <div class="about-div-infos__about-infobubble about-infobubble">
                        <!-- Short introduction -->
                        <p class="about-infobubble__text"><?php echo $translations->$lang_current->pages->about->text_1; ?></p>
                        
                        <!-- We're students... -->
                        <p class="about-infobubble__text"><?php echo $translations->$lang_current->pages->about->text_2; ?></p>

                        <!-- Why we made it -->
                        <p class="about-infobubble__text"><?php echo $translations->$lang_current->pages->about->text_3; ?></p>

                        <!-- Theme change -->
                        <p class="about-infobubble__text"><?php echo $translations->$lang_current->pages->about->text_4; ?> <a class="about-infobubble__a" href="?theme=<?php
                            echo ($site_theme == 'normal' ? 'shell' : 'normal');
                        ?>"><?php echo $translations->$lang_current->pages->about->text_5; ?></a>...</p>
                    </div>

                    <!-- Website opinion -->
                    <div class="about-div-infos__about-infobubble about-infobubble">
                        <!-- Your opinion matter -->
                        <p class="about-infobubble__text"><?php echo $translations->$lang_current->pages->about->text_6; ?></p>
                    
                        <!-- The form -->
                        <form class="about-infobubble__about-form about-form" action="https://formspree.io/f/mlgredyp" method="POST">
                            <label class="about-form__label" for="nom"><?php echo $translations->$lang_current->pages->about->form_lastname; ?></label>
                            <input class="about-form__input" type="text" id="nom" name="nom" required>

                            <label class="about-form__label" for="prenom"><?php echo $translations->$lang_current->pages->about->form_firstname; ?></label>
                            <input class="about-form__input" type="text" id="prenom" name="prenom" required>

                            <label class="about-form__label" for="email"><?php echo $translations->$lang_current->pages->about->form_email; ?></label>
                            <input class="about-form__input" type="email" id="email" name="email" required>

                            <label class="about-form__label" for="avis"><?php echo $translations->$lang_current->pages->about->form_opinion; ?></label>
                            <textarea class="about-form__textarea" id="avis" name="avis" required></textarea>

                            <button class="about-form__button" type="submit"><?php echo $translations->$lang_current->pages->about->form_submit; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <!-- Legal notices -->
        <footer class="footer">
            <a class="footer__legal-notices" href="#"><?php echo $translations->$lang_current->pages->about->legal_notices; ?></a>
        </footer>
    </body>
</html>