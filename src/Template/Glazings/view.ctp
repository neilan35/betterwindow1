<script>
<?=$this->Html->addCrumb('Glazing', '/glazings  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well span6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Glazing Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Glazing Id') ?></b></h5>
                                    <p><?= $this->Number->format($glazing->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Bal Rating') ?></b></h5>
                                    <p><?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->balrating, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?></p>
                                </div>
                                <div class="col-sm-4">
                                <h5 class="subheader"><b><?= __('Usage') ?></b></h5>
                                <p><?= $glazing->has('usage') ? $this->Html->link($glazing->usage->description, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Glass Type') ?></b></h5>
                                    <p><?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->type, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?></p>
                                </div>
                            <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Composition') ?></b></h5>
                                    <p><?= $glazing->has('composition') ? $this->Html->link($glazing->composition->name, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?></p>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Obscurity') ?></b></h5>
                                    <p><?= $glazing->obscurity ? __('Yes') : __('No'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Safety Glazing') ?></b></h5>
                                    <p><?= $glazing->safety ? __('Yes') : __('No'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Price') ?></b></h5>
                                    <p><?= $this->Number->format($glazing->price) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class="col-sm-3">
                                <h5 class="subheader"><?= __('Bal Rating') ?></h5>
                                <p><?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><?= __('Usage') ?></h5>
                                <p><?= $glazing->has('usage') ? $this->Html->link($glazing->usage->id, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><?= __('Glass Type') ?></h5>
                                <p><?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->id, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><?= __('Composition') ?></h5>
                                <p><?= $glazing->has('composition') ? $this->Html->link($glazing->composition->id, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?></p>
                            </div>
                        </div>
                    </div>
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
    <h5 class="subheader"><?= __('Related Products') ?></h5>
    <?php if (!empty($glazing->quoteproducts)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Design Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Flyscreenmesh Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Height') ?></th>
            <th><?= __('Width') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($glazing->quoteproducts as $quoteproducts): ?>
        <tr>
            <td><?= h($quoteproducts->id) ?></td>
            <td><?= h($quoteproducts->colour_id) ?></td>
            <td><?= h($quoteproducts->balrating_id) ?></td>
            <td><?= h($quoteproducts->itemtype_id) ?></td>
            <td><?= h($quoteproducts->design_id) ?></td>
            <td><?= h($quoteproducts->reveal_id) ?></td>
            <td><?= h($quoteproducts->flyscreenmesh_id) ?></td>
            <td><?= h($quoteproducts->glazing_id) ?></td>
            <td><?= h($quoteproducts->height) ?></td>
            <td><?= h($quoteproducts->width) ?></td>

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
