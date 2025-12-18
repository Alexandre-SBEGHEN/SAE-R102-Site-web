<?php

//Changer le thème si ce dernier est défini
if (isset($_GET['theme'])) $_SESSION['theme'] = $_GET['theme'];

$site_theme = $_SESSION['theme'] ?? 'normal';