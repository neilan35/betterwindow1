<script>
<?=$this->Html->addCrumb('FlyScreenMeshes', '/flyscreenmeshes  ');?>
<?= $this->Html->addCrumb('View');?>
</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-5">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Fly Screen Mesh Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h5 class="subheader"><b><?= __('Fly Screen Mesh Id') ?></b></h5>
                                    <p><?= $this->Number->format($flyscreenmesh->id) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Bal Rating') ?></b></h5>
                                <p><?= $flyscreenmesh->has('balrating') ? $this->Html->link($flyscreenmesh->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $flyscreenmesh->balrating->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Mesh Type') ?></b></h5>
                                <p><?= $flyscreenmesh->has('meshtype') ? $this->Html->link($flyscreenmesh->meshtype->id, ['controller' => 'Meshtypes', 'action' => 'view', $flyscreenmesh->meshtype->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-5">
                                <h5 class="subheader"><b><?= __('Fly Screen Type') ?></b></h5>
                                <p><?= $flyscreenmesh->has('flyscreentype') ? $this->Html->link($flyscreenmesh->flyscreentype->id, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenmesh->flyscreentype->id]) : '' ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenmesh->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmesh->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenmesh->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($flyscreenmesh->quoteproducts)): ?>
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
        <?php foreach ($flyscreenmesh->quoteproducts as $quoteproducts): ?>
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
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quoteproducts', 'action' => 'delete', $quoteproducts->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $quoteproducts->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
