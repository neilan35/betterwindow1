
<script>
<?=$this->Html->addCrumb('Customer', '/customers  ');?>
<?= $this->Html->addCrumb('Index');?>

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
            <!-- <th><?= $this->Paginator->sort('australian_business_number', 'ABN') ?></th> -->
            <th><?= $this->Paginator->sort('company_name') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('phone_number') ?></th>
            <th><?= $this->Paginator->sort('street_address') ?></th>
            <th><?= $this->Paginator->sort('suburb') ?></th>
            <th><?= $this->Paginator->sort('state') ?></th>
            <th><?= $this->Paginator->sort('postcode') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $this->Number->format($customer->id) ?></td>

            <!-- <td><?= h($customer->australian_business_number) ?></td> -->
            <td><?= h($customer->company_name) ?></td>
            <td><?= h($customer->first_name) ?></td>
            <td><?= h($customer->last_name) ?></td>
            <td><?= $this->Html->link($customer->user->email, ['controller' => 'Users', 'action' => 'view', $customer->user->id]) ?></td>
            <td><?= h($customer->phone_number) ?></td>
            <td><?= h($customer->street_address) ?></td>
            <td><?= h($customer->suburb) ?></td>
            <td><?= h($customer->state) ?></td>
            <td><?= h($customer->postcode) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <!--  -->
</div>
