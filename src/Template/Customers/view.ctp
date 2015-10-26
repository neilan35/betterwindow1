<script>
<?=$this->Html->addCrumb('Customer', '/customers  ');?>
<?= $this->Html->addCrumb('View');?>

</script>

<div class="row">
    <div class="container-fluid well span6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Customer Information </div>
                        <div class="panel-body">
                            <div class = "row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Customer Id') ?></b></h5>
                                    <p><?= $this->Number->format($customer->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('First Name') ?></b></h5>
                                    <p><?= h($customer->first_name) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Last Name') ?></b></h5>
                                    <p><?= h($customer->last_name) ?></p>
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Street Address') ?></b></h5>
                                    <p><?= h($customer->street_address) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Suburb') ?></b></h5>
                                    <p><?= h($customer->suburb) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('State') ?></b></h5>
                                    <p><?= h($customer->state) ?></p>
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Postcode') ?></b></h5>
                                    <p><?= $this->Number->format($customer->postcode) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Phone Number') ?></b></h5>
                                   <p><?= $this->Number->format($customer->phone_number) ?></p>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
            <!-- <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class= "col-sm-4">
                                <h5 class="subheader"><b>User ID</b></h5>
                                <p><?php echo $this->Html->link($customer->user->id, ['controller' => 'Users', 'action' => 'view', $customer->user->id]);
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Date</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="subheader"><b><?= __('Created') ?></b></h5>
                            <p><?= h($customer->created) ?></p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
                            <p><?= h($customer->modified) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">User Information</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="subheader"><b><?= __('Email') ?></b></h5>
                            <p><?= $this->Html->link($customer->user->email, ['controller' => 'Users', 'action' => 'view', $customer->user->id])?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions</div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($customer->users)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Employee Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->customer_id) ?></td>
            <td><?= h($users->employee_id) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>