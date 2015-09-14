    <div class="container">
    <h1 id="header"> Register for a New Account </h1>

    <span href="#" class="btn btn-default" id="toggle-private">Private Customer</span> 
    <span href="#" class="btn btn-default" id="toggle-corporate">Business Customer</span>
    </div>
    
    
    </br></br>

<div class="customers form large-10 medium-9 columns" id="private">

         
    <?= $this->Form->create($customer); ?>
    
    <fieldset>
        <legend id="legend"><?= __('Customer Information') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('phone_number');
        ?>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Login Information') ?></legend>
        <?php

            echo $this->Form->input('user.email');
            echo $this->Form->input('user.password');
             echo $this->Form->input('user.confirm_password',['type' => 'password']);
        ?>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Address') ?></legend>
        <?php
           
            echo $this->Form->input('street_address');
            echo $this->Form->input('suburb');
            echo $this->Form->input('state');
            echo $this->Form->input('postcode');
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="customers form large-10 medium-9 columns" id="corporate">

         
    <?= $this->Form->create($customer); ?>
    <fieldset>
        <legend id="legend"><?= __('Corporate Information') ?></legend>
        <?php
            echo $this->Form->input('australian_business_number');
            echo $this->Form->input('company_name');
            
        ?>
    </fieldset>
    </br></br>
    <fieldset>
        <legend id="legend"><?= __('Contact Information') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('phone_number');
        ?>
    </fieldset>
    </br></br>
  <fieldset>
        <legend id="legend"><?= __('Login Information') ?></legend>
        <?php

            echo $this->Form->input('user.email');
            echo $this->Form->input('user.password');
             echo $this->Form->input('user.confirm_password',['type' => 'password']);
        ?>
    </fieldset>
    </br></br>
      <fieldset>
        <legend id="legend"><?= __('Address') ?></legend>
        <?php
           
            echo $this->Form->input('street_address');
            echo $this->Form->input('suburb');
            echo $this->Form->input('state');
            echo $this->Form->input('postcode');
        ?>
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