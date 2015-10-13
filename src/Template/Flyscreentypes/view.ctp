<script>
<?=$this->Html->addCrumb('FlyScreenType', '/flyscreentypes  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Fly Screen Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Fly Screen Id') ?></b></h5>
                                    <p><?= $this->Number->format($flyscreentype->id) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Type') ?></b></h5>
                                    <p><?= h($flyscreentype->type) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Price') ?></b></h5>
                                    <p><?= $this->Number->format($flyscreentype->price) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreentype->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $flyscreentype->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreentype->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Flyscreenopentypes') ?></h4>
    <?php if (!empty($flyscreentype->flyscreenopentypes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Flyscreentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flyscreentype->flyscreenopentypes as $flyscreenopentypes): ?>
        <tr>
            <td><?= h($flyscreenopentypes->id) ?></td>
            <td><?= h($flyscreenopentypes->opentype_id) ?></td>
            <td><?= h($flyscreenopentypes->flyscreentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenopentypes->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenopentypes', 'action' => 'edit', $flyscreenopentypes->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenopentypes', 'action' => 'delete', $flyscreenopentypes->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
