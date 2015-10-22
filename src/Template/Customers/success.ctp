<div class="jumbotron">
      <div class="container">
        <h1>Congratulations <b><?php echo $customer->first_name." ".$customer->last_name  ?></b> for the new account!</h1>

        <p> With an account, your quotation would be quickly processed </p>
        <p> You will be also getting a premium service from us!  </p>
        
         <?php echo $this->Html->link('<span class="glyphicon glyphicon-home"></span> Back to Home', array('controller'=>'Pages','action'=>'index'), array('escape' => false, 'class' => 'btn btn-primary btn-lg'));?>

         <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Login', array('controller'=>'Customers','action'=>'login'), array('escape' => false, 'class' => 'btn btn-primary btn-lg'));?>
      </div>
    </div>		
    </br> </br>	</br> </br>	</br> </br></br> </br></br> </br>																													