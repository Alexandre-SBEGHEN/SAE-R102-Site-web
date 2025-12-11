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
    <body class="body--history">
        <!-- Menu de navigation -->
        <?php require('navbar.php'); ?>

        <!-- Contenu de la page -->
        <main class="history-main">

            <!-- Section d'intro -->
            <section class="history-main__history-sec-intro history-sec-intro">
                <!-- Intro -->
                <div class="history-sec-intro__intro intro">
                    <h2 class="intro__title"><?php echo $translations->$lang_current->pages->history->title; ?></h2>
                    <h3 class="intro__subtitle"><?php echo $translations->$lang_current->pages->history->subtitle; ?></h3>
                </div>
                <div class="history-sec-intro__buttons buttons">
                    <a class="buttons__a-button a-button" href="#test-anchor"><?php echo $translations->$lang_current->pages->history->learn_more; ?></a></button>

                    <a class="buttons__a-button a-button a-button--transparent" href="roster.php"><?php echo $translations->$lang_current->pages->history->browse; ?></a></button>
                </div>
            </section>

            <!-- Section d'histoire -->
            <section class="history-main__history-sec-history history-sec-history">
                
                <p id="test-anchor" style="width:128px; text-align:left; margin-top: 256px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porta eros quam. Pellentesque condimentum, turpis non bibendum placerat, enim ipsum ornare eros, nec convallis risus ante at nisi. Quisque eleifend eu mauris nec ornare. Maecenas fringilla interdum nulla sit amet bibendum. Duis fringilla, nulla a tristique fringilla, ipsum arcu rutrum eros, ut bibendum felis urna eu tortor. Ut mollis turpis et varius cursus. Duis imperdiet egestas nibh, non cursus justo consectetur eget. Fusce eget dolor nec nisl condimentum sagittis. Praesent finibus lobortis ligula, vel pretium ligula. Proin cursus vestibulum justo sit amet lacinia. Suspendisse pharetra dolor leo, at pretium dolor rhoncus a. Suspendisse vitae nibh a tellus laoreet tincidunt sed et est. Cras pulvinar dolor ullamcorper nisl pretium, non porttitor arcu venenatis. Aliquam vitae diam arcu. Donec aliquam sapien nisi, eget pharetra neque consequat vitae. Cras non porttitor justo. Ut odio justo, volutpat vel libero eu, vulputate condimentum arcu. Pellentesque porta ultricies pulvinar. Praesent suscipit nisl eu sapien luctus, non venenatis justo dictum. Duis finibus, urna nec tincidunt tristique, libero felis dignissim neque, ac viverra nisi dui quis enim. Aenean ornare in massa id porttitor. Aliquam eu turpis elementum, rutrum eros vitae, molestie ex. Etiam luctus, ante eleifend commodo dignissim, metus nisi gravida lacus, ac sagittis libero magna vitae leo. Nulla scelerisque quis est dictum egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur vulputate, augue non gravida commodo, metus turpis aliquet quam, vel dapibus sapien nisi et leo. Curabitur volutpat tempus sapien, sed pretium nisi scelerisque non. Etiam felis felis, tristique in pharetra non, malesuada ullamcorper dui. Donec gravida a ex et elementum. Donec efficitur lectus nibh, id faucibus nisi viverra dapibus. Sed metus metus, suscipit a sapien at, tincidunt accumsan tellus. Vestibulum massa sapien, tincidunt vitae facilisis vitae, consectetur sed ipsum. Nullam gravida malesuada sem, eget semper mi tincidunt quis. Sed ac turpis dolor. Morbi ante odio, vulputate sit amet iaculis eu, viverra vitae diam. Maecenas condimentum consequat facilisis. Duis congue, velit scelerisque volutpat vestibulum, eros risus consectetur tellus, vitae venenatis neque lectus a ante. Suspendisse mi felis, interdum at commodo ac, posuere et libero. Aliquam viverra nulla ut nibh fermentum pharetra. Ut vestibulum pulvinar enim vel malesuada. Praesent fermentum mi nec leo ullamcorper hendrerit. Proin eget felis ac arcu scelerisque consectetur. Pellentesque imperdiet sed erat at gravida. Nam eget ex elementum, efficitur dui ut, euismod eros. Praesent porttitor porta urna. Integer odio magna, bibendum finibus lectus ut, rhoncus aliquet odio. Praesent id feugiat est, sed egestas lorem.</p>
            
            </section>
            

        </main>
        

    <!-- Charger le script de changement de couleur d'arrière-plan -->
     <script src="js/script-bg.js"></script>
    </body>
</html>