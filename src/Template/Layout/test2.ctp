
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        

    <title>Better Windows Prototype</title>

    <?= $this->Html->css('custom.css')?>

    
    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('bootstrap.min.css')?>
    <?= $this->Html->css('bootstrap.css')?>

    <!-- Custom CSS -->
     <?=$this->Html->css('font-awesome.css')?>
    <?=$this->Html->css('modern-business.css')?>

    <!-- js -->
  <!--   <?= $this->Html->script('jquery-1.11.2.min.js')?>

     Bootstrap Core JavaScript
    <?= $this->Html->script('bootstrap.min.js')?> -->
 <!-- jQuery -->
        <?php echo $this->Html->script('jquery-1.11.2.min.js');?>

        <!-- Bootstrap Core JavaScript -->
        <?php echo $this->Html->script('bootstrap.min.js');?>
        <!-- Script to Activate the Carousel -->
   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
<header>
<div id= "head_frontend"> <div clasas="container"> </div> </div>
<div class="wrapper">
    <div class="container">
        <div class="social-icons pull-right">
          <a href="https://twitter.com/sahrizalpahlevi" target="_blank" class="btn btn-round btn-clear btn-twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/sahrizalpahlevi8" target="_blank" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.dribbble.com/" class="btn btn-round btn-clear btn-dribbble"><i class="fa fa-dribbble"></i></a>
          <a href="https://www.instagram.com/" class="btn btn-round btn-clear btn-instagram"><i class="fa fa-instagram"></i></a>
          <a href="https://www.linkedin.com/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
          <a href="https://www.pinterest.com/" class="btn btn-round btn-clear btn-pinterest"><i class="fa fa-pinterest"></i></a>
          <a href="https://plus.google.com/106251164898636973632/posts" class="btn btn-round btn-clear btn-google"><i class="fa fa-google-plus"></i></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        </div>
    </div> <!-- end container -->
</div>
    
    <!-- Navigation -->
    <div class="navbar-wrapper">
        <nav class="navbar navbar-custom">
           <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div id="logonav1">
                    <?php echo $this->Html->image('betterwindowsfinalfiles.png', ['alt' => 'CakePHP', 'class'=>'img-responsive']); ?>
                    </div>	

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="myNavbar">
                        <li class="active">
                         <?= $this->Html->link(__('HOME'), ['controller' =>'Pages', 'action' => 'home'])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('ABOUT US'), ['controller' =>'Pages', 'action' => 'aboutus'])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('GALLERY'), ['controller' =>'Pages', 'action' => 'gallery'])?>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <?= $this->Html->link(__('Double Glazed Windows'), ['controller' =>'Pages', 'action' => 'doubleglazed'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Triple Glazed Window'), ['controller' =>'Pages', 'action' => 'tripleglazed'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Awning Windows'), ['controller' =>'Pages', 'action' => 'awning'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Tilt Only Windwow'), ['controller' =>'Pages', 'action' => 'tilt'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Tilt & Turn Windows & Doors'), ['controller' =>'Pages', 'action' => 'tiltturn'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Tilt & Slide Windows & Doors'), ['controller' =>'Pages', 'action' => 'tiltslide'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Bi-fold Windows & Doors'), ['controller' =>'Pages', 'action' => 'bifold'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('French Windows & Doors'), ['controller' =>'Pages', 'action' => 'french'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Lift & Slide Doors'), ['controller' =>'Pages', 'action' => 'liftslide'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Energy Efficient Windows'), ['controller' =>'Pages', 'action' => 'energy'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Fire Rated Windows & Doors'), ['controller' =>'Pages', 'action' => 'firerated'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('Fly Screens'), ['controller' =>'Pages', 'action' => 'flyscreen'])?>
                                </li>
                               <!--  <li>
                                    <?= $this->Html->link(__('Colour Range'), ['controller' =>'Pages', 'action' => 'colour'])?>
                                </li> -->
                            </ul>
                        </li>
                       <li>
                            <?= $this->Html->link(__('BENEFITS'), ['controller' =>'Pages', 'action' => 'benefits'])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('CONTACT US'), ['controller' =>'Pages', 'action' => 'contactus'])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('TESTIMONIALS'), ['controller' =>'Pages', 'action' => 'testimonials'])?>
                        </li>
                        

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> DOWNLOADS<b class="caret"></b>
                                 
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="full-width.html">Full Width Page</a>
                                </li>
                                <li>
                                    <a href="sidebar.html">Sidebar Page</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse --> <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Make a Quote!', array('controller'=>'Quotes','action'=>'create'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self', 'id' => 'btnQuote'));?>
            </div>
        <!-- /.container -->
    </nav>
    </div>
                </header>
<!--page content-->

</div>



    <div class="container-fluid">
    <div class="row">

                <!-- Here's where I want my views to be displayed -->
                <?= $this->fetch('content') ?>
            </div>
             </div>

    <!-- Page Content -->
    </body>
</html>

