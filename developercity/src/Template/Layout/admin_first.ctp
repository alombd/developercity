<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Developer || City';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $this->request->webroot; ?>assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }


    </script>
</head>
<body>       
    <?= $this->Flash->render() ?>
    <?php echo $this->element('top_bar'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('footer'); ?>
        

    <!-- THEME SETTING-->
    <div class="theme-setting">
        <div class="theme-loading">
            <div class="theme-loading-content">
                <div class="dots-loader"></div>
            </div>
        </div>
        <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

        <div class="content-theme-setting"><h2 class="title">setting color</h2>
            <ul class="list-unstyled list-inline color-skins">
                <li data-color="color-1"></li>
                <li data-color="color-2"></li>
                <li data-color="color-3"></li>
                <li data-color="color-4"></li>
                <li data-color="color-5"></li>
                <li data-color="color-6"></li>
                <li data-color="color-7"></li>
                <li data-color="color-8"></li>
                <li data-color="color-9"></li>
                <li data-color="color-10"></li>
            </ul>
        </div>
    </div>
    <!-- LOADING-->
    <div class="body-2 loading">
        <div class="dots-loader"></div>
    </div>
    <!-- JAVASCRIPT LIBS-->
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
    }</script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/appear/jquery.appear.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/count-to/jquery.countTo.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/wow-js/wow.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/fancybox/js/jquery.fancybox.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
    <!-- MAIN JS-->
    <script src="<?php echo $this->request->webroot; ?>assets/js/main.js"></script>
    <!-- LOADING SCRIPTS FOR PAGE-->
    <script src="<?php echo $this->request->webroot; ?>assets/libs/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/libs/isotope/fit-columns.js"></script>
    <script src="<?php echo $this->request->webroot; ?>assets/js/pages/homepage.js"></script>
</body>
</html>
