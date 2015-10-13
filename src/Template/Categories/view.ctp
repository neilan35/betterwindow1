<script>
<?=$this->Html->addCrumb('Categories', '/categories  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Category Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Category Id') ?></b></h5>
                                    <p><?= $this->Number->format($category->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Price') ?></b></h5>
                                    <p><?= $this->Number->format($category->price) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Colours') ?></h4>
    <?php if (!empty($category->colours)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->colours as $colours): ?>
        <tr>
            <td><?= h($colours->id) ?></td>
            <td><?= h($colours->category_id) ?></td>
            <td><?= h($colours->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Colours', 'action' => 'view', $colours->id],['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Colours', 'action' => 'edit', $colours->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Colours', 'action' => 'delete', $colours->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $colours->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
