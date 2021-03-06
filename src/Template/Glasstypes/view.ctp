<script>
<?=$this->Html->addCrumb('GlassType', '/glasstypes  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Glass Type Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><?= __('Glass Type Id') ?></h5>
                                    <p><?= $this->Number->format($glasstype->id) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><?= __('Type') ?></h5>
                                    <p><?= h($glasstype->type) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $glasstype->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $glasstype->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $glasstype->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Glazings') ?></h4>
    <?php if (!empty($glasstype->glazings)): ?>
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
        <?php foreach ($glasstype->glazings as $glazings): ?>
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
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Glazings', 'action' => 'delete', $glazings->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $glazings->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
