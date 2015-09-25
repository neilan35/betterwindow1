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
    <?= $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        BetterWIndowsAdmin
    </title>
    <?= $this->Html->meta('icon') ?>


    <!-- Boostrap CSS -->
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->css('bootstrap.css');?>
    <?php echo $this->Html->css('custom.css');?>

      <!-- datatable -->
    <?php echo $this->Html->css('dataTables.bootstrap.css');?>
    <?php echo $this->Html->css('dataTables.responsive.css');?>

    <!-- Sbadmincss -->
    <?php echo $this->Html->css('sb-admin-2.css');?>
    <?php echo $this->Html->css('metisMenu.min.css');?>
    <?php echo $this->Html->css('custom.css');?>

  
   
    <!-- datatable2 -->
     <?php echo $this->Html->css('jquery.dataTables.min.css');?>
    <!-- Font -->
    <?php echo $this->Html->css('font-awesome.min.css');?>

    <!-- JS -->
    
    <?php echo $this->Html->script('jquery.min.js');?>
    <?php echo $this->Html->script('jquery.dataTables.min.js');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?php echo $this->Html->script('bootstrap-combobox.js');?>
    <?php echo $this->Html->script('sb-admin-2.js');?>
    <?php echo $this->Html->script('metisMenu.min.js');?>
    
    

     <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script type="text/javascript">
  $(document).ready(function(){
    $('.combobox').combobox();
  });
</script>

</head>
<body>
 <div id= "head_backend"> <div clasas="container"> </div> </div> 
  <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
       
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">BETTER WINDOWS ADMIN</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> adad</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                 <?php $user = $this->Session->read('Auth.User');
                    if (!empty($user))
                    {
                        echo 'You are logged in as ', $user['email'], '  ';
                    };
                   
                    if($this->Session->check('Auth.User')){
                    
                    echo $this->Html->link( "Logout",   ['controller' => 'Users', 'action' => 'logout']); 
                    }else{
                        echo $this->Html->link( "Return to Login Screen",   ['controller' => 'Users', 'action' => 'login'] ); 
                        }
                     
                    ?>
            </ul>
            <!-- /.navbar-top-links -->



            <!-- sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add User</span>', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]); ?>
                                </li> -->
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Users List</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Employees<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                                echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Employee </span>', ['controller' => 'Employees', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                 echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Employees List</span>', ['controller' => 'Employees', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Roles <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                             <!--    <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Role</span>', ['controller' => 'Roles', 'action' => 'add'], ['escape' => false]); ?>
                                </li> -->
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Roles List</span>', ['controller' => 'Roles', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Customer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Customer</span>', ['controller' => 'Customers', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Customers List</span>', ['controller' => 'Customers', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Quote Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Quote Products</span>', ['controller' => 'Quoteproducts', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Quote Products List</span>', ['controller' => 'Quoteproducts', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Colour Category<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Colour Categories</span>', ['controller' => 'Categories', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Categories Index</span>', ['controller' => 'Categories', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Colours<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Colours</span>', ['controller' => 'Colours', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Colours Index</span>', ['controller' => 'Colours', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Bal Ratings<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Bal Ratings</span>', ['controller' => 'Balratings', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Bal Rating Index</span>', ['controller' => 'Balratings', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Reveal Sizes<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Reveal Sizes</span>', ['controller' => 'Reveals', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Reveal size Index</span>', ['controller' => 'Reveals', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Item Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Item Types</span>', ['controller' => 'Itemtypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Item Type Index</span>', ['controller' => 'Itemtypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Open Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Open Types</span>', ['controller' => 'Opentypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                        echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Open Type Index</span>', ['controller' => 'Opentypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                                </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Designs<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Design</span>', ['controller' => 'Designs', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Designs Index</span>', ['controller' => 'Designs', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Pictures<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Picture</span>', ['controller' => 'Pictures', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Pictures Index</span>', ['controller' => 'Pictures', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Fly Screens<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Fly Screens</span>', ['controller' => 'Flyscreentypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Fly Screens Index</span>', ['controller' => 'Flyscreentypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Fly Screens Open Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Fly Screen Open Types</span>', ['controller' => 'Flyscreenopentypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Fly Screen Open Types Index</span>', ['controller' => 'Flyscreenopentypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Mesh Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Mesh Types</span>', ['controller' => 'Meshtypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Mesh Type Index</span>', ['controller' => 'Meshtypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Fly Screen Mesh Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Fly Screen Mesh Types</span>', ['controller' => 'FlyScreenmeshes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Fly Screen Mesh Type Index</span>', ['controller' => 'FlyScreenmeshes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Glass Usage<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Glass Usage </span>', ['controller' => 'usages', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glass Usage Index</span>', ['controller' => 'usages', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Glass Composition<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Glass Composition </span>', ['controller' => 'Compositions', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glass Composition Index</span>', ['controller' => 'Compositions', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Glass Types<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Glass Type </span>', ['controller' => 'Glasstypes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glass Type Index</span>', ['controller' => 'Glasstypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Glazings<span class="fa arrow"></span></a>
                            <ul class= "nav nav-second-level">
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add a Glazing</span>', ['controller' => 'Glazings', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?php 
                                    echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glazings Index</span>', ['controller' => 'Glazings', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                    
                            <!-- /.nav-second-level -->
                    
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Quotes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Quotes</span>', ['controller' => 'Quotes', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Quotes List</span>', ['controller' => 'Quotes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Enquiries<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-import"></i> Add Enquiries</span>', ['controller' => 'Enquiries', 'action' => 'add'], ['escape' => false]); ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> Enquiries List</span>', ['controller' => 'Enquiries', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- endofnav -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> <span><?=$this->fetch('title') ?> </span> </h1>
                        <div class="container-fluid">
                             <div >

                                 <div>
                                    <?= $this->Flash->render() ?>

                                    <div class="row"> 
                                    <!-- Content -->
                                     <?= $this->fetch('content') ?>
                                    </div>  
                                </div>
       
                            </div>
                        </div> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>


 

</body>
</html>
