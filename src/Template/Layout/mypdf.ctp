<!DOCTYPE html>
	<html lang="en">
		<head> 
			 <?= $this->Html->charset() ?>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">


		     <?php echo $this->Html->css('bootstrap.min.css');?>
			 <?php echo $this->Html->css('bootstrap.css');?>
			 <?php echo $this->Html->css('forpdf.css');?>
			 

			 <style>
				table, th, td {
				    border: 1px solid black;
				    border-collapse: collapse;
				}
			</style>


		</head>

		<body>
			<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                             

                                
                                    <?= $this->Flash->render() ?>

                                    <div class="row"> 
                                    <!-- Content -->
                                     <?= $this->fetch('content') ?>
                                    </div>  
                                
       
                            
                         
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->






		</body>


	</html>