    <!-- Page Content -->

    <!-- /.container -->

        <!-- jQuery -->
        <?php echo $this->Html->script('jquery-1.11.2.min.js');?>

        <!-- Bootstrap Core JavaScript -->
        <?php echo $this->Html->script('bootstrap.min.js');?>



        
        <!-- Script to Activate the Carousel -->
        <script>
        $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000 //changes the speed
            });
        });
        </script>