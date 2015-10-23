<script>
<?=$this->Html->addCrumb('FlyScreenOpenType', '/Flyscreenopentypes  ');?>
<?= $this->Html->addCrumb('View');?>
</script>

<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Fly Screen Open Type Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h5 class="subheader"><b><?= __('Fly Screen Open Type  Id') ?></b></h5>
                                    <p><?= $this->Number->format($flyscreenopentype->id) ?></p>
                                </div>
                                <div class="col-sm-5">
                                    <h5 class="subheader"><b><?= __('Item type') ?></b></h5>
                                    <p><?= h($flyscreenopentype->opentype->itemtype->type) ?></p>
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
                            <div class="col-sm-6">
                                    <h5 class="subheader"><b><?= __('Open type') ?></b></h5>
                                    <p><?= $flyscreenopentype->has('opentype') ? $this->Html->link($flyscreenopentype->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $flyscreenopentype->opentype->id]) : '' ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="subheader"><b><?= __('Fly Screen Type') ?></b></h5>
                                    <p><?= $flyscreenopentype->has('flyscreentype') ? $this->Html->link($flyscreenopentype->flyscreentype->type, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenopentype->flyscreentype->id]) : '' ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenopentype->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentype->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenopentype->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h5 class="subheader"><?= __('Related Flyscreenmeshes') ?></h5>
    <?php if (!empty($flyscreenopentype->flyscreenmeshes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Meshtype Id') ?></th>
            <th><?= __('Flyscreenopentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flyscreenopentype->flyscreenmeshes as $flyscreenmeshes): ?>
        <tr>
            <td><?= h($flyscreenmeshes->id) ?></td>
            <td><?= h($flyscreenmeshes->balrating_id) ?></td>
            <td><?= h($flyscreenmeshes->meshtype_id) ?></td>
            <td><?= h($flyscreenmeshes->flyscreenopentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenmeshes', 'action' => 'view', $flyscreenmeshes->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenmeshes', 'action' => 'edit', $flyscreenmeshes->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenmeshes', 'action' => 'delete', $flyscreenmeshes->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmeshes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
