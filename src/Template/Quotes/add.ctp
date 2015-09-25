<!-- <<<<<<<< HEAD  -->
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Quoteproducts'), ['controller' => 'Quoteproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quoteproduct'), ['controller' => 'Quoteproducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes form large-10 medium-9 columns">
    <?= $this->Form->create($quote); ?>
    <fieldset>
        <legend><?= __('Add Quote') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('item');
            echo $this->Form->input('unitcost');
            echo $this->Form->input('quantity');
            echo $this->Form->input('installation');
            echo $this->Form->input('installtype');
            echo $this->Form->input('delivery');
            // echo $this->Form->input('deliverytype');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
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
