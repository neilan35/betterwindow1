<script>
<?=$this->Html->addCrumb('Role', '/roles  ');?>
<?= $this->Html->addCrumb('View');?>
</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Role Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Role Id') ?></b></h5>
                                    <p><?= $this->Number->format($role->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Description') ?></b></h5>
                                    <p><?= h($role->description) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">Date</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="subheader"><b><?= __('Created') ?></b></h5>
                                <p><?= h($role->created) ?></p>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
                                <p><?= h($role->modified) ?></p>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-success btn-xs']) ?>
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

<div class= "container">
<div class="related row">
   <div class="table-responsive">
   <h4 class="subheader"><?= __('Related Employees') ?></h4>
    <?php if (!empty($role->employees)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Role') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($role->employees as $employees): ?>
        <tr>
            <td><?= h($employees->id) ?></td>
            <td><?= h($employees->first_name) ?></td>
            <td><?= h($employees->last_name) ?></td>
            <td><?= h($employees->description) ?></td>
            <td><?= h($employees->created) ?></td>
            <td><?= h($employees->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
