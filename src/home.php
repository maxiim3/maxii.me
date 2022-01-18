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

    if(isset($_POST['submit'])){
        if ($_POST['submit']) {

            $name     = $_POST['nom'];
            $mailFrom = $_POST['mail'];
            $message  = $_POST['content'];
            $subject  = "New message from ".$name;

            $mailTo   = "contact@maxii.me";
            $headers  = "De: ".$mailFrom;
            $txt = "Nouveau mail de: ".$name.".\n\n".$message;
            mail($mailTo, $subject, $txt, $headers);
            header("Location: ?message=envoye");

            $responseFrom = $mailTo;
            $responseSubject = "Merci pour votre message";
            $responseHeaders = "De Maxime";
            $dstName = $name;
            $responseTo = $mailFrom;
            $responseMsg = "Bonjour " .$dstName . ","
                            ."\nJ'ai bien reçu votre message et vous répondrai dans les plus brefs délais!\n"
                            ."Cordialement\n"
                            ."Maxime Tamburrini\n"
                            .$responseFrom
                            ."\n\n---------------------\n"
                            ."Votre message :\n"
                            . $message;
            mail($responseTo, $responseSubject, $responseMsg, $responseHeaders);
            unset($_POST);

        }
    }

    if ($_GET["message"]=="envoye")
            $displayMessage = "Message envoyé. Un mail de confirmation vous a été envoyé.";
    else{
        $displayMessage = "";
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
        <aside class="messageForm" id="msgForm">
            <?= $displayMessage ?>
        </aside>
        <!--        // content will be load here-->
        <?= $loadContent ?>
    <!--FOOTER-->
    <?php (($_GET['page'] != 'accueil') && isset($_GET['page']) )? include_once 'src/template/footer.php': '';?>

    </main>
    <script src="/src/views/js/index.js"></script>
</body>
</html>
