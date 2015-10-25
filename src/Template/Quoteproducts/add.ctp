<script>
<?=$this->Html->addCrumb('QuoteProduct', '/quoteproducts  ');?>
<?= $this->Html->addCrumb('Add');?>
</script>
<?php use Cake\Routing\Router; ?>


<?= $this->Form->create($quoteproduct); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a Quote Product
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">    
                                <?= $this->Form->input('quote_id', ['class' => 'combobox form-control',
                                        'options' => $quotes,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Quote Id']);?>
                                </div>
                                <div class="form-group">    
                                <?= $this->Form->input('colour_id', ['class' => 'combobox form-control',
                                        'options' => $colours,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Colour']);?>
                                </div>
                                <div class="form-group">    
                                <?= $this->Form->input('balrating_id', ['class' => 'combobox form-control',
                                        'options' => $balratings,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Bal Rating']);?>
                                </div>
                                <div class="form-group">    
                                <?= $this->Form->input('itemtype_id', ['class' => 'combobox form-control',
                                        'options' => $itemtypes,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Item Types']);?>
                                </div>
                                <!--<div class="form-group">    
                                <?= $this->Form->input('open_type', ['class' => 'combobox form-control',
                                        'options' => $opentypes,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Item Types']);?>
                                </div> -->
                                <div class="form-group">    
                                <?= $this->Form->input('design_id', ['class' => 'combobox form-control',
                                        'options' => $designs,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Designs']);?>
                                </div>
                                <div class="form-group">    
                                <?php echo $this->Form->input('reveal', ['type'=>'checkbox']);?>
                                </div>
                                <div class="form-group">    
                                <?= $this->Form->input('reveal_id', ['class' => 'combobox form-control',
                                        'options' => $reveals,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Reveals']);?>
                                </div>
                                <div class="form-group">    
                                <?php echo $this->Form->input('flyscreentype', ['type'=>'checkbox']);?>
                                </div>
                                <!-- <div class="form-group">    
                                <?= $this->Form->input('flyscreentype_id', ['class' => 'combobox form-control',
                                        'options' => $flyscreentypes,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Fly Screen Types']);?>
                                </div> -->
                                <div class="form-group">    
                                <?= $this->Form->input('flyscreenmesh_id', ['class' => 'combobox form-control',
                                        'options' => $flyscreenmeshes,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Fly Screen Mesh Types']);?>
                                </div>
                                <div class="form-group">    
                                <?= $this->Form->input('glazing_id', ['class' => 'combobox form-control',
                                        'options' => $glazings,
                                        'empty'=> true,
                                        'required' => true,
                                        'label' => 'Glazings']);?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('height', ['class' => 'form-control']) ?>
                                </div> 
                      
                                <div class="form-group">
                                    <?= $this->Form->input('width', ['class' => 'form-control']) ?>
                                </div> 
                                <div class="form-group">
                                    <?= $this->Form->input('usages', ['class' => 'form-control']) ?>
                                </div> 
                                <div class="form-group">
                                    <?= $this->Form->input('glasstype', ['class' => 'form-control']) ?>
                                </div> 
                        </div>
                        </form>
                    </div>
                </div>
            
            </div>
            <button type="submit" class="btn btn-default">Submit </button>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#itemtype-id').change(function() {
            // $("#opentype-id").remove();
            $("#opentype-id option").remove();
            var url = "<?= Router::url(['controller' => 'Quoteproducts', 'action' => 'get_opentypes']) ?>/" + $(this).val();
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
</script>