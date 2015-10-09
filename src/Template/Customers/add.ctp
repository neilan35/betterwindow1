<?= $this->Form->create($customer); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Customer
                        </div>
                    <div>
                    <span href="#" class="btn btn-default" id="toggle-private1" style= "margin-top: 20px; margin-left: 20px; margin-bottom : 20px">Private Customer</span> 
                    <span href="#" class="btn btn-default" id="toggle-corporate1" style= "margin-top: 20px; margin-left : 20px; margin-bottom : 20px">Business Customer</span>
                    </div>
                    </br></br>
                    <div class="customers form large-10 medium-9 columns" id="private">
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-vertical" role="form">
                                        <legend><?= __('Customer Information') ?></legend>
                                            <div class="form-group">
                                            <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('phone_number', ['class' => 'form-control']) ?>
                                            </div>
                                            </br></br>
                                            <legend><?= __('Login Information') ?></legend>
                                            <div class="form-group" >
                                             <?= $this->Form->input('user.email', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('user.password', ['class' => 'form-control']) ?>
                                            </div> 
                                            <div class="form-group">
                                             <?= $this->Form->input('user.confirm_password', ['class' => 'form-control','type'=>'password']) ?>
                                            </div>
                                            </br></br>
                                            <legend><?= __('Address') ?></legend>
                                            <div class="form-group" >
                                             <?= $this->Form->input('street_address', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('suburb', ['class' => 'form-control']) ?>
                                            </div> 
                                            <div class="form-group">
                                             <?= $this->Form->input('state', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('postcode', ['class' => 'form-control']) ?>
                                            </div>
                                    </form>
                                </div>  
                            </div>
                            <button type="submit" class="btn btn-default">Submit </button>
                                        <?= $this->Form->end() ?>
                        </div>
                    </div>
                    <?= $this->Form->create($customer); ?>
                    <div class="customers form large-10 medium-9 columns" id="corporate">
                    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-vertical" role="form">
                                        <legend><?= __('Corporate Information') ?></legend>
                                            <div class="form-group">
                                            <?= $this->Form->input('australian_business_number', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('company_name', ['class' => 'form-control']) ?>
                                            </div>
                                            </br></br>
                                            <legend><?= __('Contact Information') ?></legend>
                                            <div class="form-group">
                                            <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('phone_number', ['class' => 'form-control']) ?>
                                            </div>
                                            </br></br>
                                            <legend><?= __('Login Information') ?></legend>
                                            <div class="form-group" >
                                             <?= $this->Form->input('user.email', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('user.password', ['class' => 'form-control']) ?>
                                            </div> 
                                            <div class="form-group">
                                             <?= $this->Form->input('user.confirm_password', ['class' => 'form-control','type'=>'password']) ?>
                                            </div>
                                            </br></br>
                                            <legend><?= __('Address') ?></legend>
                                            <div class="form-group" >
                                             <?= $this->Form->input('street_address', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('suburb', ['class' => 'form-control']) ?>
                                            </div> 
                                            <div class="form-group">
                                             <?= $this->Form->input('state', ['class' => 'form-control']) ?>
                                            </div>
                                            <div class="form-group">
                                             <?= $this->Form->input('postcode', ['class' => 'form-control']) ?>
                                            </div>
                                    </form>
                                </div>  
                            </div>
                            <button type="submit" class="btn btn-default">Submit </button>
                                        <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <script>
 $(document).ready(function(){

 $("#corporate").hide();

 $("#toggle-private1").click(function(){
    $("#corporate").hide();
    $("#private").show();
});

$("#toggle-corporate1").click(function(){
    $("#private").hide();
    $("#corporate").show();
});
});
  </script>