<script>
<?=$this->Html->addCrumb('Composition', '/compositions  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Composition Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Composition Id') ?></b></h5>
                                    <p><?= $this->Number->format($composition->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Composition Name') ?></b></h5>
                                    <p><?= h($composition->name) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Price') ?></b></h5>
                                    <p><?= h($composition->price) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $composition->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $composition->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $composition->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <?php if (!empty($composition->glazings)): ?>
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
        <?php foreach ($composition->glazings as $glazings): ?>
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
