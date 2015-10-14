<script>
<?=$this->Html->addCrumb('Quote', '/quotes  ');?>
<?= $this->Html->addCrumb('View');?>
</script>
<div class="row">
    <div class="container-fluid well span6">
        <div class="row-fluid">
            <div class="col-sm-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">Quote Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Quote Id') ?></b></h5>
                                    <p><?= $this->Number->format($quote->id) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Quoteno') ?></b></h5>
                                    <p><?= h($quote->quoteno) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Item') ?></b></h5>
                                    <p><?= h($quote->item) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Quantity') ?></b></h5>
                                    <p><?= $this->Number->format($quote->quantity) ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Installation') ?></b></h5>
                                    <p><?= $quote->installation ? __('Yes') : __('No'); ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Installtype') ?></b></h5>
                                    <p><?= h($quote->installtype) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Delivery') ?></b></h5>
                                    <p><?= $quote->delivery ? __('Yes') : __('No'); ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Deliverytype') ?></b></h5>
                                    <p><?= h($quote->deliverytype) ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Status') ?></b></h5>
                                    <p><?= h($quote->status) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Unitcost') ?></b></h5>
                                    <p><?= $this->Number->format($quote->unitcost) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Unitcost') ?></b></h5>
                                    <p><?= $this->Number->format($quote->unitcost) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Customer') ?></b></h5>
                                <p><?= $quote->has('customer') ? $this->Html->link($quote->customer->id, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Date</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="subheader"><b><?= __('Created') ?></b></h5>
                            <p><?= h($quote->created) ?></p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
                            <p><?= h($quote->modified) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions</div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quote->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quote->id], ['class' => 'btn btn-success btn-xs']) ?>
                        <span class="pull-right text-muted small"><em>Are you sure?</em>
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>


<script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>
<div class="related row">
   <div class="table-responsive">
                <h4 class="subheader"><?= __('Related Quoteproducts') ?></h4>
                <?php if (!empty($quote->quoteproducts)): ?>
                <table class="table table-hover" id="tableIndex">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Quote Id') ?></th>
                        <th><?= __('Colour Id') ?></th>
                        <th><?= __('Balrating Id') ?></th>
                        <th><?= __('Itemtype Id') ?></th>
                        <th><?= __('Design Id') ?></th>
                        <th><?= __('Reveal Id') ?></th>
                        <th><?= __('Flyscreenmesh Id') ?></th>
                        <th><?= __('Glazing Id') ?></th>
                        <th><?= __('Height') ?></th>
                        <th><?= __('Width') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($quote->quoteproducts as $quoteproducts): ?>
                    <tr>
                        <td><?= h($quoteproducts->id) ?></td>
                        <td><?= h($quoteproducts->quote_id) ?></td>
                        <td><?= h($quoteproducts->colour_id) ?></td>
                        <td><?= h($quoteproducts->balrating_id) ?></td>
                        <td><?= h($quoteproducts->itemtype_id) ?></td>
                        <td><?= h($quoteproducts->design_id) ?></td>
                        <td><?= h($quoteproducts->reveal_id) ?></td>
                        <td><?= h($quoteproducts->flyscreenmesh_id) ?></td>
                        <td><?= h($quoteproducts->glazing_id) ?></td>
                        <td><?= h($quoteproducts->height) ?></td>
                        <td><?= h($quoteproducts->width) ?></td>
                        <td><?= h($quoteproducts->created) ?></td>
                        <td><?= h($quoteproducts->modified) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Quoteproducts', 'action' => 'view', $quoteproducts->id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Quoteproducts', 'action' => 'edit', $quoteproducts->id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quoteproducts', 'action' => 'delete', $quoteproducts->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $quoteproducts->id)]) ?>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
