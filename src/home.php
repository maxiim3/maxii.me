<?php
include_once 'src/classes/Pages.php';
include_once 'src/datas/datas.php';

if (isset($_GET['page'])) {
    $headTitle = $pages[$_GET['page']]->getTitle();
    $loadContent = $pages[$_GET['page']]->getContent();
} else {
    $headTitle = $pages['accueil']->getTitle();
    $loadContent = $pages["accueil"]->getContent();
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/src/views/css/reset.css">
    <link rel="stylesheet" href="/src/views/css/style.css">
    <script src="https://kit.fontawesome.com/0c07982b91.js" crossorigin="anonymous"></script>
    <title><?= $headTitle ?></title>
</head>

<body>
    <!--NAV-->
    <?php include_once 'src/template/nav.php'; ?>
    <div class="background background-mountain"></div>
    <main id="main" class="nav-onscreen">
            <!--        // content will be load here-->
            <?= $loadContent ?>
    <!--FOOTER-->
    <?php if (($_GET['page'] != 'accueil') && isset($_GET['page']) ){
        include_once 'src/template/footer.php';}; ?>

    </main>
    <script src="/src/views/js/index.js"></script>
</body>
</html>