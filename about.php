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
                        <p class="about-infobubble__text">Nous sommes MALLET Mathias, SBEGHEN Alexandre, et YOUNOUSSA Hachim. Nous sommes passionnés d'informatique et nous aimons beaucoup les memes. Les Brainrots en sont justement, et nous avons décidé sans réellement réfléchir de créer notre tout premier site web en les choisissant comme thématique.</p>
                        
                        <!-- We're students... -->
                        <p class="about-infobubble__text">Nous sommes étudiants à <a class="about-infobubble-a" href="https://www.univ-amu.fr/">Aix-Marseille Université</a>, en première année de BUT informatique.</p>

                        <!-- Why we made it -->
                        <p class="about-infobubble__text">Nous avons réalisé ce site web dans le cadre d'un projet de groupe qui nous a été donné par notre professeur <a class="about-infobubble-a" href="https://www.mickael-martin-nevot.com/">Mickael MARTIN NEVOT</a>.</p>

                        <!-- Theme change -->
                        <p class="about-infobubble__text">D'ailleurs, nous avons en début d'année appris à nous servir de Linux, et nous aimons tellement l'apparence des terminaux de commande que nous sommes dits que, cela pourrait être drôle si le site pouvait <a class="about-infobubble-a" href="?theme=<?php
                            echo ($site_theme == 'normal' ? 'shell' : 'normal');
                        ?>">ressembler à un terminal</a>...</p>
                    </div>

                    <!-- Website opinion -->
                    <div class="about-div-infos__about-infobubble about-infobubble">
                        <!-- Your opinion matter -->
                        <p class="about-infobubble__text">Puisqu'il s'agit de notre tout premier site web, nous aimerions beaucoup savoir ce que vous pensez de ce dernier. C'est pourquoi nous vous proposons de remplir le formulaire ci-dessous afin que vous puissiez laisser un petit commentaire à propos votre visite sur Brainrot City. Votre avis compte !</p>
                    
                        <!-- The form -->
                        <form class="about-infobubble__about-form about-form" action="https://formspree.io/f/mlgredyp" method="POST">
                            <label class="about-form__label" for="nom">Nom :</label>
                            <input class="about-form__input" type="text" id="nom" name="nom" required>

                            <label class="about-form__label" for="prenom">Prénom :</label>
                            <input class="about-form__input" type="text" id="prenom" name="prenom" required>

                            <label class="about-form__label" for="email">E-mail :</label>
                            <input class="about-form__input" type="email" id="email" name="email" required>

                            <label class="about-form__label" for="avis">Avis :</label>
                            <textarea class="about-form__textarea" id="avis" name="avis" required></textarea>

                            <button class="about-form__button" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- About div 
            <div class="main__about about">
                <div>
                    <p><?php echo $translations->$lang_current->pages->about->about_us; ?></p>
                </div>
            
                <div>
                    <form class="main__form form" action="https://formspree.io/f/mlgredyp" method="POST">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required>

                        <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" required>

                        <label for="email">E-mail :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="avis">Avis :</label>
                        <textarea id="avis" name="avis" required></textarea>

                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>-->
        </main>

        <!-- Legal notices -->
        <footer class="footer">
            <a class="footer__legal-notices" href="#"><?php echo $translations->$lang_current->pages->about->legal_notices; ?></a>
        </footer>
    </body>
</html>