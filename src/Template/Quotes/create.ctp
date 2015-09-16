<?php use Cake\Routing\Router; ?>
<div class="container" >

    <h1 id="header"> Make a quotation! </h1>
    
    </br></br>
    <p> You can request information on the price by just simply  providing a short description on what information you require. Thank you..</p>
    </br>
</div>
<div class="container">
<div class="quotes form large-10 medium-9 columns">

    <?= $this->Form->create($quote,['class'=>'form-horizontal']); ?>
    <fieldset>
        <legend><?= __('Get Quote Form') ?></legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Colour*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.colour_id', ['options' => $colours,
                'empty' => '(Please choose one)',
                'class' => 'form-control',
                'label' => false]);?>

                </div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">BAL-Rating*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.balrating_id', ['options' => $balratings,
                'empty' => '(Please choose one)',
                'class' => 'form-control',
                'label' => false]);?>

                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Item Type*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.itemtype_id', ['options' => $itemtypes,
                'empty' => '(Please choose one)',
                'class'=>'form-control',
                'id'=>'itemtype-id',
                'label'=>false ]);?>
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Open Type*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.open_type',['options'=>[] ,
                'id'=>'opentype-id',
                'empty' =>'(Please choose one)',
                'class'=>'form-control',
                'label'=>false]); ?>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Usage*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.usage',['options'=>$usages,
                'empty'=>'(Please choose one)',
                'class' =>'form-control',
                'label'=>false]); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Glass Types*:</label>
                <div class="input-group col-sm-5">

                <?php echo $this->Form->input('quoteproduct.glasstype', ['options' => $glasstypes,
                'empty' => '(Please choose one)',
                'class'=> 'form-control',
                'label'=> false]);?>
            </div>
        </div>

        </br></br>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Height*:</label>
                <div class="input-group col-sm-5">

                <?php echo $this->Form->input('quoteproduct.height', ['placeholder' => '100mm-200mm',
                'class'=> 'form-control',
                'label'=> false]);?>
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Width*:</label>
                <div class="input-group col-sm-5">

                <?php echo $this->Form->input('quoteproduct.width', ['placeholder' => '200mm-500mm',
                'class'=> 'form-control',
                'label'=> false]);?>
            </div>
        </div>  

        </br></br>
        
        
         <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Reveal*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.reveal', ['type'=>'checkbox']);?>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Reveal*:</label>
                <div class="input-group col-sm-5">
                <?php echo $this->Form->input('quoteproduct.reveal_id', ['options' => $reveals, 
                'empty' => '(Please choose one)',
                'class'=> 'form-control',
                'label'=> false]);?>
            </div>
        </div>
        

       

        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Flyscreentype*:</label>
                <div class="input-group col-sm-5">

                <?php echo $this->Form->input('quoteproduct.flyscreentype',['type'=>'checkbox','yes']);?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Flyscreentype*:</label>
                <div class="input-group col-sm-5">

                <?php echo $this->Form->input('quoteproduct.flyscreentypes',['options'=>[] ,
                'id'=>'flyscreentype-id',
                'empty' =>'(Please choose one)',
                'class'=>'form-control',
                'label'=>false]);?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Special*:</label>
                <div class="input-group col-sm-5 ">
                <?php echo $this->Form->input('quoteproduct.obscurity', ['type'=>'checkbox']); ?>
                <?php echo $this->Form->input('quoteproduct.safety', ['type'=>'checkbox']); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">Would you like to add these?*:</label>
                <div class="input-group col-sm-5 ">
                <?php echo $this->Form->input('quoteproduct.installation');?>
                <?php echo $this->Form->input('quoteproduct.delivery');?>
            </div>
        </div>


        <?php

        	// echo $this->Form->input('quoteproduct.colour_id', ['options' => $colours,
        	// 	'empty' => '(Please choose one)']);
        	// echo $this->Form->input('quoteproduct.balrating_id', ['options' => $balratings,
        	// 	'id'=>'balrating-id',
         //        'empty' => '(Please choose one)']);
        	// echo $this->Form->input('quoteproduct.itemtype_id', ['options' => $itemtypes,
        	// 	'empty' => '(Please choose one)',
        	// 	 'id'=>'itemtype-id']);
        	// echo $this->Form->input('quoteproduct.open_type',['options'=>[] ,
        	// 	'id'=>'opentype-id',
         //        'empty' =>'(Please choose one)']);
            // echo $this->Form->input('quoteproduct.usage',['options'=>$usages,
            //     'empty'=>'(Please choose one)']);
            // echo $this->Form->radio('quoteproduct.glasstype', $glasstypes, 
            //     ['label' =>'Glass Types']);
            // echo $this->Form->input('quoteproduct.glasstype', ['options' => $glasstypes,
            //     'empty' => '(Please choose one)']);

        	// echo $this->Form->input('quoteproduct.height');
        	// echo $this->Form->input('quoteproduct.width') ;
        	// echo $this->Form->input('quoteproduct.reveal', ['type'=>'checkbox']);
        	// echo $this->Form->input('quoteproduct.reveal_id', ['options' => $reveals, 
        	// 	'empty' => '(Please choose one']);
        	// echo $this->Form->input('quoteproduct.flyscreentype',['type'=>'checkbox']);
            // echo $this->Form->input('quoteproduct.flyscreentypes',['options'=>[] ,
            //     'id'=>'flyscreentype-id',
            //     'empty' =>'(Please choose one)']);
        	
            // echo $this->Form->input('quoteproduct.obscurity', ['type'=>'checkbox']);
            // echo $this->Form->input('quoteproduct.safety', ['type'=>'checkbox']);

            // echo $this->Form->input('quoteproduct.installation');
            // echo $this->Form->input('quoteproduct.delivery');


        	


		     // echo $this->Form->input('customer_id', ['options' => $customers]);
            // echo $this->Form->input('item');
            // echo $this->Form->input('unitcost');
            // echo $this->Form->input('quantity');
            // echo $this->Form->input('installation');
            // echo $this->Form->input('installtype');
            // echo $this->Form->input('delivery');
            // echo $this->Form->input('deliverytype'); 
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>	
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#itemtype-id').change(function() {
            // $("#opentype-id").remove();
            $("#opentype-id option").remove();
            var url = "<?= Router::url(['controller' => 'Quotes', 'action' => 'get_opentypes']) ?>/" + $(this).val();
            $.getJSON(url, null, function(data) {
                // var $ot = $("#opentype-id");

                $.each(data, function(id, name) {
                    // console.log ($ot);
                    // $("#opentype-id").append("<option value='" + 2 + "'>" + "nick" + "</option>");
                    $("#opentype-id").append("<option value='" + id + "'>" + name + "</option>");
                });
            });
        });
    });

    $(document).ready(function() {
        $('#opentype-id').change(function() {
            // $("#opentype-id").remove();
            // $("#flyscreentype-id option").remove();
            var url = "<?= Router::url(['controller' => 'Quotes', 'action' => 'get_flyscreentypes']) ?>/" + $(this).val();
            $.getJSON(url, null, function(data) {
                var $ot = $("#flyscreentype-id");

                $.each(data, function(id, name) {
                    console.log ($ot);
                    // $("#opentype-id").append("<option value='" + 2 + "'>" + "nick" + "</option>");
                    $("#flyscreentype-id").append("<option value='" + id + "'>" + name + "</option>");
                });
            });
        });
    });
</script>