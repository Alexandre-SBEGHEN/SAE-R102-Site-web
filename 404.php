<?php require('init.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang_current; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <title><?php $docname=get_page_name(); echo $translations->$lang_current->docname->$docname; ?></title>
    </head>
    <body class="body">
        <h1>Ouupss</h1>
        <p>pas trouvé my bad</p>
        <a href="index.php">Retour à l'accueil</a>
    </body>
</html>