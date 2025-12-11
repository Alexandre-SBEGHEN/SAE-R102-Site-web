<header class="header">
    <div class="header__logo-sitename logo-sitename">
        <a class = "logo-sitename__logolink" href="index.php"><img class="image logolink-logo" src="assets/images/nav/brain.webp" alt="Website's logo" loading="lazy"></a>
        <h1 class="logo-sitename__title">BRAINROT</h1>
    </div>

    <nav class="header__nav nav">
        <ul class="nav__list">
            <!-- Créer les liens pour naviguer entre les pages --> 
            <li class="nav__item"> <a class="nav__link<?php echo (page_nameis('index')) ? ' nav__link--current' : ''; ?>" href="index.php"><?php echo $translations->$lang_current->navbar->links[0]; ?></a></li>
            <li class="nav__item"> <a class="nav__link<?php echo (page_nameis('history')) ? ' nav__link--current' : ''; ?>" href="history.php"><?php echo $translations->$lang_current->navbar->links[1]; ?></a></li>
            <li class="nav__item"> <a class="nav__link<?php echo (page_nameis('roster')) ? ' nav__link--current' : ''; ?>" href="roster.php"><?php echo $translations->$lang_current->navbar->links[2]; ?></a></li>
            <li class="nav__item"> <a class="nav__link<?php echo (page_nameis('generator')) ? ' nav__link--current' : ''; ?>" href="generator.php"><?php echo $translations->$lang_current->navbar->links[3]; ?></a></li>
            <li class="nav__item"> <a class="nav__link<?php echo (page_nameis('about')) ? ' nav__link--current' : ''; ?>" href="about.php"><?php echo $translations->$lang_current->navbar->links[4]; ?></a></li>
            <li class="nav__item"><a href="#"><img class="image nav__flag" src="assets/images/nav/flag_fr.svg" alt="Flag of France" loading="lazy"></a></li>
        </ul>
    </nav>
</header>