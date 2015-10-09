<?php use Cake\Routing\Router; ?>

<div class="quoteproducts form large-10 medium-9 columns">
<?= $this->Form->create($quoteproduct); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Product
            </div>
            <div class="panel-body">
               <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-horizontal" role="form">
                                    
                                    <div class="row">

                            
                                <div class="form-group">    
                                <?= $this->Form->input('quote_id', ['options' => $quotes]); ?>
                                </div>
                           
                                <div class="form-group">
                                    <?= $this->Form->input('colour_id', ['options' => $colours]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('balrating_id', ['options' => $balratings]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('itemtype_id', ['options' => $itemtypes, 'id'=>'itemtype-id']) ?>
                                </div>

                                 <div class="form-group">
                                    <?= $this->Form->input('open_type', ['options'=>[] ,'id'=>'opentype-id']) ?>
                                </div> 

                                <div class="form-group">
                                    <?= $this->Form->input('design_id', ['options' => $designs]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('reveal') ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('reveal_id', ['options' => $reveals, 'empty' => true]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('flyscreenmesh_id', ['options' => $flyscreenmeshes, 'empty' => true]) ?>
                                </div>
                                <div class="form-group">
                                      <?= $this->Form->input('glazing_id', ['options' => $glazings]) ?>
                                </div>
                               <div class="form-group">
                                    <?= $this->Form->input('height', ['class' => 'form-control']) ?>
                                </div> 
                      
                                <div class="form-group">
                                    <?= $this->Form->input('width', ['class' => 'form-control']) ?>
                                </div> 
                            
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