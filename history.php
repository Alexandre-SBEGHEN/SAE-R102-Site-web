<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $translations->$lang_current->pages->history->meta_desc; ?>">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <!-- Nav menu -->
        <?php require('navbar.php'); ?>
        
        <!-- Main page content -->
        <main class="main">
            <!-- Intro part -->
            <div class="main__history-intro history-intro">
                <!-- Intro -->
                <div class="history-intro__history-intro-div history-intro-div--intro">
                    <h2 class="history-intro__title"><?php echo $translations->$lang_current->pages->history->title; ?></h2>
                    <h3 class="history-intro__subtitle"><?php echo $translations->$lang_current->pages->history->subtitle; ?></h3>
                </div>
                <!-- Learn more & discover buttons -->
                <div class="history-intro__history-intro-div history-intro-div--buttons">
                    <a class="history-intro__a-button a-button" href="#history-of-brainrots"><?php echo $translations->$lang_current->pages->history->learn_more; ?></a>
                    <a class="history-intro__a-button a-button a-button--transparent" href="roster.php"><?php echo $translations->$lang_current->pages->history->browse; ?></a>
                </div>
            </div>
            
            <!-- History section -->
            <article id="history-of-brainrots" class="main__history-article history-article">
                <!-- Section 1 : Title & paragraph -->
                <div class="history-article__history-article-div history-article-div history-article-div--1">
                    <h2 class="history-article__title">History of Brainrots</h2>
                    <p class="history-article__history-article-paragraph history-article-paragraph history-article-paragraph--large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis sem lorem, in vehicula nisi aliquet quis. Phasellus eu lectus in neque varius euismod. Vestibulum et mollis purus, sed fringilla dolor. Donec sed pretium orci. Morbi pulvinar lacus vitae velit imperdiet accumsan. Praesent lectus eros, finibus posuere rhoncus tincidunt, imperdiet id odio. Vestibulum dui nulla, venenatis placerat fermentum non, fermentum eget arcu.</p>
                </div>  

                <!-- Section 2 : Image & description -->
                <div class="history-article__history-article-div history-article-div history-article-div--2">
                    <img class="image history-article__picture" src="assets/images/misc/strawberry_elephant.avif" alt="The Strawberry Elephant" loading="lazy">
                    <p class="history-article__history-article-paragraph history-article-paragraph history-article-paragraph--tiny">Suspendisse pretium consectetur nulla. Integer bibendum quam nulla. Etiam elit ipsum, egestas non volutpat posuere, fringilla ut nulla. Nullam enim tortor, hendrerit sed ultricies sit amet, commodo nec ex. Phasellus viverra elit urna, at mollis purus semper nec. Maecenas posuere gravida nunc, id elementum mauris molestie dapibus. In hac habitasse platea dictumst. Mauris tristique nibh quis maximus laoreet. Nam luctus rutrum quam non lacinia. In viverra pellentesque egestas. Cras luctus elementum lacus, eget porta odio ultrices eu. Suspendisse potenti. Mauris molestie eros enim, ac mollis neque pharetra a. Morbi a lacus feugiat, lobortis urna a, maximus est. Vivamus vitae faucibus tortor, venenatis elementum mi. Morbi eu mi elit.</p>
                    <img class="image history-article__picture" src="assets/images/misc/smurf_cat.avif" alt="Smurf Cat" loading="lazy">
                </div>

                <!-- Section 3 : Image & conclusion -->
                <div class="history-article__history-article-div history-article-div history-article-div--3">
                    <p class="history-article__history-article-paragraph history-article-paragraph history-article-paragraph--medium">Nullam tincidunt porta feugiat. In hac habitasse platea dictumst. Vivamus tempor eget mi nec fringilla. Donec libero ex, tristique ut rhoncus eget, laoreet ut metus. Pellentesque neque lacus, luctus nec arcu sed, semper pellentesque tellus. Sed ultrices tortor sit amet nibh lobortis, vel eleifend risus malesuada. Vivamus porttitor condimentum aliquam. Suspendisse vel magna ut augue luctus tincidunt ac et tortor.</p>
                    <img class="history-article__picture" src="assets/images/misc/tralalero_tralala.avif" alt="Tralalero Tralala" loading="lazy">
                </div>

                <!-- Section 4 : Youtube video & text -->
                 
                <div class="history-article__history-article-div history-article-div history-article-div--4">
                    <a class="youtube-embed" href="https://youtu.be/fIhUqswc4c4?si=FtBJWkGZG4z0cs-L" target="blank">
                        <img width="640" height="480" class="history-article__picture" src="assets/images/misc/yt-thumbnail.avif" alt="Thumbnail of a Youtube video" loading="lazy">

                        <svg width="100" height="100" viewBox="0 0 2 2" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="red" d="M1.839.579a.22.22 0 0 0-.154-.154C1.548.389 1 .389 1 .389s-.548 0-.685.036a.22.22 0 0 0-.154.154C.125.716.125 1 .125 1s0 .285.036.421c.02.075.079.134.154.154.137.036.685.036.685.036s.548 0 .685-.036a.22.22 0 0 0 .154-.154c.036-.137.036-.421.036-.421s0-.284-.036-.421"/><path fill="#fff" d="m.824 1.264.456-.262L.824.738z"/></svg>

                        <h3>BRAINROT MEME (2025-2060) : Offical Music</h3>
                    </a>
                    <p class="history-article__history-article-paragraph history-article-paragraph history-article-paragraph--medium">Nam porttitor ex sapien, in luctus ipsum aliquam nec. Cras dui erat, consequat ac dolor eget, commodo luctus ex. Phasellus facilisis eleifend libero quis venenatis. Integer ligula augue, pretium nec sagittis porttitor, dapibus pharetra magna. Proin bibendum vulputate urna, non elementum turpis eleifend dictum. Nunc tempus tellus sit amet quam dapibus, eget varius arcu efficitur. Aliquam erat volutpat. Aliquam iaculis condimentum dignissim. Quisque bibendum, magna et rutrum posuere, lectus lacus ultrices neque, id rhoncus turpis leo sit amet diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur velit leo, venenatis nec libero sit amet, congue aliquam orci.</p>
                    <p class="history-article__history-article-paragraph history-article-paragraph history-article-paragraph--large">Phasellus nisl lorem, fringilla at nibh lobortis, ultrices scelerisque massa. Nulla convallis risus at auctor condimentum. Donec nec bibendum odio, vitae hendrerit libero. Phasellus ultrices ac ligula vitae finibus. Proin vehicula leo at mollis tincidunt. Nulla blandit ac nibh a ornare. Mauris erat mi, convallis nec tristique eleifend, tempus ut ex. Aenean lectus magna, posuere vel ligula scelerisque, sollicitudin rutrum urna.</p>
                </div>


                <!-- Section 5 : Back top top page -->
                <div class="history-article__history-article-div history-article-div history-article-div--5">
                    <a class="buttons__a-button a-button" href="#"><?php echo $translations->$lang_current->pages->history->back_to_top; ?></a>
                </div>
            </article>
        </main>
    <!-- Load background color changing script -->
    <script src="js/script-bg.js"></script>
    </body>
</html>