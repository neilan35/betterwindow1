
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
     
    <?=$this->Html->css('modern-business.css')?>

    <!-- js -->
    <?= $this->Html->script('jquery-1.11.2.min.js')?>

     <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('bootstrap.min.js')?>

     <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
<div class="row">
  <div class="col-md-5">
    <div id="logonav">
    <?php echo $this->Html->image('better_windows_final.jpg', ['alt' => 'CakePHP']); ?>
    </div>
  </div>
  <div class="col-md-5">
<nav class="navbar navbar-customWeb" role="navigation">
  <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Login or Register</strong><span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                <li><?php $user = $this->Session->read('Auth.User');
                    if (!empty($user))
                    {
                        echo '  ',$user['email'], ' ';
                    };
                   
                    if($this->Session->check('Auth.User')){
                    
                    echo $this->Html->link( "Logout",   ['controller' => 'Customers', 'action' => 'logout']); 
                    }else{
                        echo $this->Html->link( "Login",   ['controller' => 'Customers', 'action' => 'login']); 
                        }
                     
                    ?></li>
                <li><?php $user = $this->Session->read('Auth.User');

                    if (!empty($user)) {
                    } 

                    else {
                        echo $this->Html->link( "Register", ['controller' => 'Customers', 'action' =>'register']);
                    }
                    
                    ?></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      <div class="col-md-2">
      <div class="container-fluid"></div>
      </div>
    </nav>    
    
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
                    <a class="navbar-brand" href="#"><b>BETTER WINDOWS</b></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
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
                <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
    </nav>
    </div>
</div>
<!--page content-->
<div class="container">

            <div id="bw-carousel" class="carousel slide"><!-- class of slide for animation -->
              <div class="carousel-inner">
                <div class="item active"><!-- class of active since it's the first item -->
                 <?php echo $this->Html->image('img1.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img2.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img3.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img4.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
              </div><!-- /.carousel-inner -->
              <!--  Next and Previous controls below
                    href values must reference the id for this carousel -->
                 <a class="left carousel-control" href="#bw-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a class="right carousel-control" href="#bw-carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->
</div>


    <div class="container-fluid">
    <div class="row">

                <!-- Here's where I want my views to be displayed -->
                <?= $this->fetch('content') ?>
            </div>
             </div>






    <!-- Page Content -->
    
    <script>
        $(document).ready(function(){
        $('.carousel').carousel({
            interval: 2000 //changes the speed
            });
        });
        </script>
    </body>
</html>
