<div class="container">
    <h1 id="header"> Register for a New Account </h1>

    <span href="#" class="btn btn-default" id="toggle-private">Private Customer</span> 
    <span href="#" class="btn btn-default" id="toggle-corporate">Business Customer</span>
    </div>
    
    
    </br></br>

<div id="private">       
<?= $this->Form->create($customer,['class'=>'form-horizontal']); ?>
    <fieldset>
        <legend id="legend"><?= __('Customer Information') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">First Name*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('first_name',['class' => 'form-control',
                                                       'placeholder' => 'Enter First Name',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="last_name">Last Name*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('last_name',['class' => 'form-control',
                                                       'placeholder' => 'Enter Last Name',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone_number">Phone Number:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('phone_number*',['class' => 'form-control',
                                                       'placeholder' => 'Enter Phone Number',
                                                       'label' => false]);?>
                </div>
        </div>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Login Information') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="user.email">Email*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.email',['class' => 'form-control',
                                                       'placeholder' => 'Enter Email Address',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
                <label class="control-label col-sm-2" for="user.password">Password*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.password',['class' => 'form-control',
                                                       'placeholder' => 'Enter Password',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
                <label class="control-label col-sm-2" for="user.confirm_password">Confirm Password*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.confirm_password',['class' => 'form-control',
                                                       'placeholder' => 'Re-Enter Password',
                                                       'label' => false]);?>
                </div>
        </div>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Address') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="street_address">Street Address*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('street_address',['class' => 'form-control',
                                                       'placeholder' => 'Enter Street Address',
                                                       'label' => false]);?>
                </div>
                </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="suburb">Suburb*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('suburb',['class' => 'form-control',
                                                       'placeholder' => 'Enter Suburb',
                                                       'label' => false]);?>
                </div>
                </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="state">State*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('state',['class' => 'form-control',
                                                       'placeholder' => 'Enter State',
                                                       'label' => false]);?>
                </div>
                </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="postcode">Postcode*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('postcode',['class' => 'form-control',
                                                       'placeholder' => 'Enter Postcode',
                                                       'label' => false]);?>
                </div>  
              </div>     
    </fieldset>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div id="corporate">       
<?= $this->Form->create($customer,['class'=>'form-horizontal']); ?>
        <fieldset>
        <legend id="legend"><?= __('Corporate Information') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="australian_business_number">ABN*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('australian_business_number',['class' => 'form-control',
                                                       'placeholder' => 'Enter ABN',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="company_name">Company Name*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('company_name',['class' => 'form-control',
                                                       'placeholder' => 'Enter Company Name',
                                                       'label' => false]);?>
                </div>
        </div>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Customer Information') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">First Name*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('first_name',['class' => 'form-control',
                                                       'placeholder' => 'Enter First Name',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="last_name">Last Name*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('last_name',['class' => 'form-control',
                                                       'placeholder' => 'Enter Last Name',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone_number">Phone Number*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('phone_number',['class' => 'form-control',
                                                       'placeholder' => 'Enter Phone Number',
                                                       'label' => false]);?>
                </div>
        </div>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Login Information') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="user.email">Email*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.email',['class' => 'form-control',
                                                       'placeholder' => 'Enter Email Address*',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
                <label class="control-label col-sm-2" for="user.password">Password*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.password',['class' => 'form-control',
                                                       'placeholder' => 'Enter Password',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="user.confirm_password">Confirm Password*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('user.confirm_password',['class' => 'form-control',
                                                       'placeholder' => 'Re-Enter Password',
                                                       'label' => false]);?>
                </div>
        </div>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Address') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="street_address">Street Address*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('street_address',['class' => 'form-control',
                                                       'placeholder' => 'Enter Street Address',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="suburb">Suburb*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('suburb',['class' => 'form-control',
                                                       'placeholder' => 'Enter Suburb',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="state">State*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('state',['class' => 'form-control',
                                                       'placeholder' => 'Enter State',
                                                       'label' => false]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="postcode">Postcode*:</label>
                <div class="input-group col-sm-3">
                <?php echo $this->Form->input('postcode',['class' => 'form-control',
                                                       'placeholder' => 'Enter Postcode',
                                                       'label' => false]);?>
                </div>  
        </div>     
    </fieldset>


    <?= $this->Form->button(__('Submit Registration')) ?>
    <?= $this->Form->end() ?>
</div>


 <script>
 $(document).ready(function(){

 $("#corporate").hide();

 $("#toggle-private").click(function(){
    $("#corporate").hide();
    $("#private").show();
});

$("#toggle-corporate").click(function(){
    $("#private").hide();
    $("#corporate").show();
});
});
  </script>