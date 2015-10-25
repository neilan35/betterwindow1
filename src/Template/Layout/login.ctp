<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

error_reporting(0);

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />

    <?= $this->Html->charset() ?>
   

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<!-- Link the css files -->
   <?php echo $this->Html->css('styles.css');?>
   <?php echo $this->Html->css('sb-admin-2.css');?>
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->css('bootstrap-theme.css');?>
    <?php echo $this->Html->css('bootstrap-theme.css.map');?>
    <?php echo $this->Html->css('bootstrap.css');?>
    <?php echo $this->Html->css('bootstrap.css.map');?>
    <?php echo $this->Html->css('custom.css');?>

<!-- Link the js files -->
  <?php echo $this->Html->script('jquery-1.11.2.min.js');?>
   <?php echo $this->Html->script('bootstrap.min.js');?>
  <?php echo $this->Html->script('bootstrap.js');?>
<?php echo $this->Html->script('npm.js');?>
    <?php echo $this->Html->script('sb-admin-2.js');?>
<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">

</head>

<!--My body goes here -->
<body>
<div id="wrapper">
     <div class="container-fluid">
        <div>
            <?= $this->Flash->render() ?>
            <?= $this->Flash->render('auth') ?>

            <div class="row">
                <!-- Here's where I want my views to be displayed -->
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
</div>

<footer id= "footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"> 
                <h4 class="section-title">CONTACT US</h4>
            </br>
                <p><strong class="section-title">Email: </strong>office@blueskywindows.com.au</br>
                <strong class="section-title">Phone: </strong>(03) 9588 2198 </br><strong class="section-title">Mobile: </strong class="section-title">0450 908 271</br> <strong class="section-title">Address: </strong>9A Citrus Street Braeside, VIC 3195</p> 
            </div>
            <div class="col-lg-6"> 
                <div class="social-icons pull-right">
                        <a href='#' target="_blank" class="btn btn-round btn-clear btn-twitter" id="social-footer"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/blueskywindows.com.au?fref=ts" target="_blank" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="btn btn-round btn-clear btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://www.pinterest.com/" class="btn btn-round btn-clear btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="btn btn-round btn-clear btn-google"><i class="fa fa-google-plus"></i></a>
                </div> 
            </div>
        </div>  
    </div>

</footer>


    <div class="footer-bottom">
        <div class="container">
        <p> Copyright 2015 by <strong class="section-title">Team 9 </strong> All Rights Reserved</p>
        </div>
    </div>

    <script>
    <!--
    $(function(){
        $(".left").height( $(".right").height() );
    });
    -->
    </script>


</body>
</html>
