<script>
<?=$this->Html->addCrumb('Item', '/itemtypes  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Item Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Item Id') ?></b></h5>
                                    <p><?= $this->Number->format($itemtype->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Type') ?></b></h5>
                                    <p><?= h($itemtype->type) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions</div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemtype->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemtype->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Opentypes') ?></h4>
    <?php if (!empty($itemtype->opentypes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($itemtype->opentypes as $opentypes): ?>
        <tr>
            <td><?= h($opentypes->id) ?></td>
            <td><?= h($opentypes->itemtype_id) ?></td>
            <td><?= h($opentypes->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Opentypes', 'action' => 'view', $opentypes->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Opentypes', 'action' => 'edit', $opentypes->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opentypes', 'action' => 'delete', $opentypes->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $opentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($itemtype->quoteproducts)): ?>
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
        <?php foreach ($itemtype->quoteproducts as $quoteproducts): ?>
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
