
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        

    <title>Better Windows Prototype</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('custom.css')?>

    
    <!-- Bootstrap Core CSS -->
    
    <?= $this->Html->css('bootstrap.min.css')?>
    <?= $this->Html->css('bootstrap.css')?>

    <!-- Custom CSS -->
     <?=$this->Html->css('font-awesome.css')?>
     <?php echo $this->Html->css('font-awesome.min.css');?>
    <?=$this->Html->css('modern-business.css')?>

    <!-- js -->

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
         <div class="row">
             <div class="col-lg-7">
                <div id="logonav1" class="pull-left">
                    <?php
                     echo $this->Html->image("betterwindowsfinalfiles.png", [
                                            "alt" => "CakePHP",
                                            'class'=>'img-responsive',
                                            'url' => ['controller' => 'Pages', 'action' => 'home']
                                        ]); ?>
                </div>
            </div> 
            <div class="col-lg-5">
                <div class="social-icons pull-right">
                    
                        <a href='#' target="_blank" class="btn btn-round btn-clear btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/blueskywindows.com.au?fref=ts" target="_blank" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="btn btn-round btn-clear btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://www.pinterest.com/" class="btn btn-round btn-clear btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="btn btn-round btn-clear btn-google"><i class="fa fa-google-plus"></i></a>
                       
                    
                </div>
            </div>
        </div> <!-- end container -->

    </div>
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

              
					<!--  <div>
					      <p class="navbar-text navbar-right">Signed in as 
					         <a href="#" class="navbar-link">Thomas</a>
					      </p>
					 </div> -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="myNavbar">
                        <li class="">
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
                            <?= $this->Html->link(__('CONTACT US'), ['controller' =>'Enquiries', 'action' => 'contactus'])?>
                        </li>
                        <!-- <li>
                            <?= $this->Html->link(__('TESTIMONIALS'), ['controller' =>'Pages', 'action' => 'testimonials'])?>
                        </li>   -->                      

                        <!-- <li class="dropdown">
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
                        </li> -->
                        
                    </ul>
                    <ul class="navbar-form form-inline navbar-right">
                        <?php $user = $this->Session->read('Auth.User');?>
                        <?php if (!empty($user)) : ?>
                            <?php  echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Make a Quote!', array('controller'=>'Quotes','action'=>'create'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self','id' => 'btnQuote'));?>
                            <?php  echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Logout!', array('controller'=>'Customers','action'=>'logout'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self','id' => 'btnQuote'));?>
                                &nbsp;
                            <b><?php echo $user['email'];?></b>
                        <?php endif; ?>

                        <?php if (empty($user)) : ?>
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Make a Quote!', array('controller'=>'Quotes','action'=>'create'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self','id' => 'btnQuote'));?>
                                &nbsp;
                             <?php   echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Login!', array('controller'=>'Customers','action'=>'Login'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self', 'id'=>'btnLogin'));?>

                             <?php echo $this->Html->link('<span class="glyphicon glyphicon-ok"></span> Register', array('controller'=>'Customers','action'=>'register'), array('escape' => false, 'class' => 'btn btn-success btn-md', 'target' => '_self', 'id'=>'btnLogin'));?>
              
                        <?php endif; ?>
                    </ul>
        <!-- /.container -->
    </nav>
    </div>
</header>
<!--page content-->


            <div id="bw-carousel" class="carousel slide" data-ride="carousel"><!-- class of slide for animation -->
             <ol class="carousel-indicators">
      		  <li data-target="#bw-carousel" data-slide-to="0" class="active"></li>
        		<li data-target="#bw-carousel" data-slide-to="1"></li>
        		<li data-target="#bw-carousel" data-slide-to="2"></li>
                <li data-target="#bw-carousel" data-slide-to="3"></li>
      		 </ol>

              <div class="carousel-inner">
                <div class="item active"><!-- class of active since it's the first item -->
                 <?php echo $this->Html->image('trial1.jpg', ['alt' => 'CakePHP','class'=>'sliding']); ?>
                  <div class="carousel-caption">
                    <h1>BETTER WINDOWS</h1>
              <p>The best UPVC Window in town</p>
              <p><?php echo $this->Html->link('<span class="glyphicon glyphicon-ok"></span> Sign up today!', array('controller'=>'Customers','action'=>'register'), array('escape' => false, 'class' => 'btn btn-primary btn-lg', 'target' => '_self'));?>
              </p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img5.jpg', ['alt' => 'CakePHP', 'class'=>'sliding']); ?>
                  <div class="carousel-caption">
                  <h1>BETTER WINDOWS</h1>
                    <p>Login now</p>
                     <?php   echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Login!', array('controller'=>'Customers','action'=>'Login'), array('escape' => false, 'class' => 'btn btn-success btn-lg', 'target' => '_self', 'id'=>'btnLogin'));?>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('trial2.jpg', ['alt' => 'CakePHP','class'=>'sliding']); ?>
                  <div class="carousel-caption">
                  <h1>BETTER WINDOWS</h1>
                    <p>Make an enquiry</p>
                    <p><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Make an Enquiry!', array('controller'=>'Enquiries','action'=>'contactus'), array('escape' => false, 'class' => 'btn btn-primary btn-lg', 'target' => '_self'));?></p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('trial3.jpg', ['alt' => 'CakePHP','class'=>'sliding']); ?>
                  <div class="carousel-caption">
                    <h1>BETTER WINDOWS</h1>
                    <p>Make a quotation now</p>
                    <p><?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Make a Quote!', array('controller'=>'Quotes','action'=>'create'), array('escape' => false, 'class' => 'btn btn-success btn-lg', 'target' => '_self','id' => 'btnQuote'));?>
                    </p>
                  </div>
                </div>
              </div><!-- /.carousel-inner -->
              <!--  Next and Previous controls below
                    href values must reference the id for this carousel -->
                 <a class="left carousel-control" href="javascript:void(0)" role="button" data-slide="prev" data-target="#bw-carousel">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a class="right carousel-control" href="javascript:void(0)" role="button" data-slide="next" data-target="#bw-carousel">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->



    <div class="container">
        <div class="row">
            <?= $this->Flash->render() ?>
            <!-- Here's where I want my views to be displayed -->
            <?= $this->fetch('content') ?>
        </div>
    </div>

</body>

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


    <!-- Page Content -->
    <script>
    $(document).ready(function() {
        var actions = ['home', 'aboutus', 'gallery', 'benefits', 'contactus','produts'];
        var path = this.location.pathname;

        found = false;
        $.each(actions, function(key, action) {
            if (path.indexOf(action) >= 0)
                found = true;
        });

        if (!found)
            path = '#';

        window.console.log(path);

        $('a[href="' + path + '"]').parent().addClass('active');
    });
</script>

    <script>
        $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000 //changes the speed
            });
        });
        </script>
    </body>
</html>

