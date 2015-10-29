<script>
<?=$this->Html->addCrumb('Quote', '/quotes  ');?>
<?= $this->Html->addCrumb('Add');?>
</script>
<?= $this->Form->create($quote); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a Quote
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="dropdown">
                                    <?= $this->Form->input('customer_id', ['class' => 'combobox form-control',
                                                       'options' => $customers,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Customer Name']);?>
                                </div>
                                <div class="form-group">
                                   <?php echo $this->Form->input('installation', ['type'=>'checkbox']);?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('installtype', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('delivery', ['type'=>'checkbox']);?>
                                </div>
                                 <div class="dropdown">
                                    <?= $this->Form->input('status',['class' => 'form-control',
                                        'options' => ['Completed' => 'Completed', 
                                        'Pending' => 'Pending']
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                </br>
            <button type="submit" class="btn btn-default">Submit </button>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
   <!--  <fieldset>
        <legend><?= __('Add Quote') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('item');
            echo $this->Form->input('unitcost');
            echo $this->Form->input('quantity');
            echo $this->Form->input('installation');
            echo $this->Form->input('installtype');
            echo $this->Form->input('delivery');
            echo $this->Form->input('deliverytype');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
 <!-- =======  -->

<!--<?= $this->Form->create($quote); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a quote
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $this->Form->input('customer_id',['class' => 'combobox form-control',
                                                       'options' => $customers,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => false]);?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('item', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('unit_cost', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('quantity', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('installation', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('installtype', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('delivery', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('deliverytype', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('status', ['class' => 'form-control']) ?>
                                </div>
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
>>>>>>> origin/master
