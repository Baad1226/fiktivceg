<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FIKTÍV CÉG</title>
    <script type="text/javascript" src = "<?php echo SITE_ROOT?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo SITE_ROOT?>js/regisztracio_ellenorzo.js"></script>
    <?php if($viewData['javascript']) echo '<script type="text/javascript" src="'.$viewData['javascript'].'"></script>'; ?>

    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
    <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>

</head>
<body>
<header>

    <h1 class="header">Fiktív cég weboldala</h1>
    <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname']. "<br>".$_SESSION['userloginname']."" ?></em></div>
</header>
<nav>
    <?php echo Menu::getMenu($viewData['selectedItems']); ?>
</nav>
<section>
    <?php if($viewData['render']) include($viewData['render']); ?>
</section>
<footer>&copy; UTM80J - BACSA ÁDÁM ISTVÁN <?= date("Y") ?></footer>
</body>
</html>
