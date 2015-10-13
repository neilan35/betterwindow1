    <script>
<?=$this->Html->addCrumb('Users', '/users');?>

</script>
    <script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>

    <div class="table-responsive">
    <table class="table table-hover" id="tableIndex">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <th><?= $this->Paginator->sort('employee_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <!-- <th><?= $this->Paginator->sort('modified') ?></th> -->
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
                 <?php if ($user->has('customer')) {
                 echo "<td>".$user->customer->first_name."</td>";
                             } else {
                                echo "<td>".$user->employee->first_name."</td>";
                                     }?>
            
            <td><?= h($user->email) ?></td>

            <?php if ($user->has('customer')) {
                echo "<td>".$this->Html->link(__('Customer'), ['controller' => 'Customers', 'action' => 'view', $user->customer->id])."</td>";
                        }else {
                                    echo "<td>".$this->Html->link(__('Employee'), ['controller' => 'Employee', 'action' => 'view', $user->employee->id])."</td>";
                                }?>

            <td>
                <?= $user->has('customer') ? $this->Html->link($user->customer->id, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]) : '' ?>
            </td>
            <td>
                <?= $user->has('employee') ? $this->Html->link($user->employee->id, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]) : '' ?>
            </td>
            <td><?= h($user->created) ?></td>
            <!-- <td><?= h($user->modified) ?></td> -->
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-xs']) ?>
                 &nbsp;
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-xs']) ?>
                &nbsp;
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>
</div>
