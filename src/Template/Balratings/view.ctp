<script>
<?=$this->Html->addCrumb('BalRating', '/balratings  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Bal Rating Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Bal Rating Id') ?></b></h5>
                                    <p><?= $this->Number->format($balrating->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Bal Rating') ?></b></h5>
                                    <p><?= h($balrating->balrating) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $balrating->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $balrating->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $balrating->id], ['class' => 'btn btn-success btn-xs']) ?>
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

<div class= "container" style= "width: 100%">
<div class="related row">
   <div class="table-responsive">
    <thead>
    <h4 class="subheader"><?= __('Related Flyscreenmeshes') ?></h4>
    <?php if (!empty($balrating->flyscreenmeshes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Meshtype Id') ?></th>
            <th><?= __('Flyscreenopentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($balrating->flyscreenmeshes as $flyscreenmeshes): ?>
        <tr>
            <td><?= h($flyscreenmeshes->id) ?></td>
            <td><?= h($flyscreenmeshes->balrating_id) ?></td>
            <td><?= h($flyscreenmeshes->meshtype_id) ?></td>
            <td><?= h($flyscreenmeshes->flyscreenopentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenmeshes', 'action' => 'view', $flyscreenmeshes->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenmeshes', 'action' => 'edit', $flyscreenmeshes->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenmeshes', 'action' => 'delete', $flyscreenmeshes->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmeshes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Glazings') ?></h4>
    <?php if (!empty($balrating->glazings)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Usage Id') ?></th>
            <th><?= __('Glasstype Id') ?></th>
            <th><?= __('Composition Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Obscurity') ?></th>
            <th><?= __('Safety') ?></th>
            <th><?= __('Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($balrating->glazings as $glazings): ?>
        <tr>
            <td><?= h($glazings->id) ?></td>
            <td><?= h($glazings->usage_id) ?></td>
            <td><?= h($glazings->glasstype_id) ?></td>
            <td><?= h($glazings->composition_id) ?></td>
            <td><?= h($glazings->balrating_id) ?></td>
            <td><?= h($glazings->obscurity) ?></td>
            <td><?= h($glazings->safety) ?></td>
            <td><?= h($glazings->price) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Glazings', 'action' => 'view', $glazings->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Glazings', 'action' => 'edit', $glazings->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Glazings', 'action' => 'delete', $glazings->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $glazings->id)]) ?>
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
    <?php if (!empty($balrating->quoteproducts)): ?>
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
        <?php foreach ($balrating->quoteproducts as $quoteproducts): ?>
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
</div>
