<header class="header">
            <div class="header__navbar-logo-sitename navbar-logo-sitename">
                <a class = "navbar-logo-sitename__link" href="/">
                    <img width="48" height="48" class="image navbar-logo-sitename__logo" src="/assets/images/nav/brain.avif" alt="Website's logo" loading="lazy">
                </a>
                <h1 class="navbar-logo-sitename__title">BRAINROT</h1>
            </div>

            <nav class="header__navbar-nav navbar-nav">
                <ul class="navbar-nav__list">
                    <!-- Link to browse the pages --> 
                    <li class="navbar-nav__item"><a class="navbar-nav__link<?php echo (page_nameis('index')) ? ' navbar-nav__link--current' : ''; ?>" href="/index.php"><?php echo $translations->$lang_current->navbar->links[0]; ?></a></li>
                    <li class="navbar-nav__item"><a class="navbar-nav__link<?php echo (page_nameis('history')) ? ' navbar-nav__link--current' : ''; ?>" href="/history.php"><?php echo $translations->$lang_current->navbar->links[1]; ?></a></li>
                    <li class="navbar-nav__item"><a class="navbar-nav__link<?php echo (page_nameis('roster')) ? ' navbar-nav__link--current' : ''; ?>" href="/roster.php"><?php echo $translations->$lang_current->navbar->links[2]; ?></a></li>
                    <!--
                    <li class="navbar-nav__item"><a class="navbar-nav__link<?php echo (page_nameis('generator')) ? ' navbar-nav__link--current' : ''; ?>" href="/generator.php"><?php echo $translations->$lang_current->navbar->links[3]; ?></a></li>
                    -->
                    <li class="navbar-nav__item"><a class="navbar-nav__link<?php echo (page_nameis('about')) ? ' navbar-nav__link--current' : ''; ?>" href="/about.php"><?php echo $translations->$lang_current->navbar->links[4]; ?></a></li>

                    <li class="navbar-nav__item"><a href="#"><img width="48" class="image navbar-nav__flag" src="/assets/images/nav/flag_fr.svg" alt="Flag of France" loading="lazy"></a></li>
                </ul>
            </nav>
        </header>