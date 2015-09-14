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

    <script>
    <!--
    $(function(){
        $(".left").height( $(".right").height() );
    });
    -->
    </script>


</body>
</html>
