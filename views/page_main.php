<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FIKTÍV CÉG</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
    <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
</head>
<body>
<header>
    <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname']. "<br>".$_SESSION['userloginname']."" ?></em></div>
    <h1 class="header">Fiktív cég weboldala</h1>
</header>
<nav>
    <?php echo Menu::getMenu($viewData['selectedItems']); ?>
</nav>
<aside>
    <p>Baloldali menü sáv</p>
</aside>
<section>
    <?php if($viewData['render']) include($viewData['render']); ?>
</section>
<footer>&copy; UTM80J - BACSA ÁDÁM ISTVÁN <?= date("Y") ?></footer>
</body>
</html>
