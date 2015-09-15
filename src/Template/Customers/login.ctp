<!-- File: src/Template/Users/login.ctp -->

<div id="wrapper">
 
    <div class="container-fluid">
        <div >
            <section class="container">
        <section class="row">
            
                <form method="post" action="#" role="login">
                    <img src="../img/logo.png" alt="" class="img-responsive" />
                  
                <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" name="email" placeholder="Enter e-mail" required class="form-control" />
                       
                    </div>
                   
                    
                   
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="password" placeholder="Enter password" required class="form-control" />
                       
                    </div>
                   
                
                    <button type="submit" name="go" class="btn btn-block btn-success btn-lg">Login Now</button>
                    
                    <div class="form-group less-space">
                        <input type="checkbox" name="remember" value="1" /> Remember me on this device
                    </div>
                    
                    <section>
                        <?php echo $this->Html->link('Forgot Password?',['controller'=>'Users', 'action' => 'forgotPassword']); ?>
                    </section>
                </form>
            
        </section>
    </section>

    

        </div>
    </div>
     <?= $this->Form->end() ?>
</div>

  