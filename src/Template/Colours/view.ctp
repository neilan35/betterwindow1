<script>
<?=$this->Html->addCrumb('Colour', '/colours  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Colour Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Colour Id') ?></b></h5>
                                    <p><?= $this->Number->format($colour->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Name') ?></b></h5>
                                    <p><?= h($colour->name) ?></p>
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
                            <div class= "col-sm-5">
                                <h5 class="subheader"><b>Category ID</b></h5>
                                <p><?= $colour->has('category') ? $this->Html->link($colour->category->id, ['controller' => 'Categories', 'action' => 'view', $colour->category->id]) : '' ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colour->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $colour->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colour->id], ['class' => 'btn btn-success btn-xs']) ?>
                        <span class="pull-right text-muted small"><em>Are you sure?</em>
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>




 <script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();s
        });
        </script>

<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($colour->quoteproducts)): ?>
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
        <?php foreach ($colour->quoteproducts as $quoteproducts): ?>
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
