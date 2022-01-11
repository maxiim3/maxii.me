<?php
include_once 'src/classes/Pages.php';
include_once 'src/datas/datas.php';
?>

    <nav class="navTop">
        <ul>
            <?php foreach ($pages as $pageKey => $pageObject):?>
                <li class="links" ><a id="<?=$pageKey?>" href="?page=<?=$pageKey?>"><?=$pageObject->getTitle()?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="btn-wrap">
        <button id="btn-menu"> MENU </button>
    </div>
    <nav class="navDrop">
        <ul>
            <?php foreach ($pages as $pageKey => $pageObject):?>
                <li class="links" ><a id="<?=$pageKey?>" href="?page=<?=$pageKey?>"><?=$pageObject->getTitle()?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
<!---->
<!--    <nav class="navTop">-->
<!--        <ul>-->
<!--            <li class="links" ><a id="home" href="?page=welcome">Home</a></li>-->
<!--            <li class="links" ><a id="about" href="?page=about">À propos</a></li>-->
<!--            <li class="links" ><a id="formation" href="?page=formation">Diplômes & formations</a></li>-->
<!--            <li class="links" ><a id="experience" href="?page=experience">Expériences Pro</a></li>-->
<!--            <li class="links" ><a id="contact" href="?page=contact">Contact</a></li>-->
<!--        </ul>-->
<!--    </nav>-->
<!---->
<!--    <div class="btn-wrap">-->
<!--        <button id="btn-menu"> MENU </button>-->
<!--    </div>-->
<!--    <nav class="navDrop">-->
<!--        <ul>-->
<!--            <li class="links" ><a id="home" href="?page=welcome">Home</a></li>-->
<!--            <li class="links" ><a id="about" href="?page=about">À propos</a></li>-->
<!--            <li class="links" ><a id="formation" href="?page=formation">Diplômes & formations</a></li>-->
<!--            <li class="links" ><a id="experience" href="?page=experience">Expériences Pro</a></li>-->
<!--            <li class="links" ><a id="contact" href="?page=contact">Contact</a></li>-->
<!--        </ul>-->
<!--    </nav>-->