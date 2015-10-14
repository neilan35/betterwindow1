<script>
<?=$this->Html->addCrumb('Quote', '/quotes  ');?>
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
            <th><?= $this->Paginator->sort('customer_id') ?></th>
            <!-- <th><?= $this->Paginator->sort('item') ?></th> -->
            <th><?= $this->Paginator->sort('unitcost') ?></th>
            <th><?= $this->Paginator->sort('quantity') ?></th>
            <th><?= $this->Paginator->sort('installation') ?></th>
            <th><?= $this->Paginator->sort('delivery') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($quotes as $quote): ?>
        <tr>
            <td><?= 'QN'.$this->Number->format($quote->id, ['pattern' => '000000'])?></td>
            <td>
                <?= $quote->has('customer') ? $this->Html->link($quote->customer->first_name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?>
            </td>
            <!-- <td><?= h($quote->item) ?></td> -->
            <td><?= $this->Number->format($quote->unitcost, ['places' => 2, 'before' => '$ ']) ?></td>
            <td><?= $this->Number->format($quote->quantity) ?></td>
            
            <?php if ($quote->installation === true){
                    echo '<td> Yes </td>';
                     }else{
                        echo '<td> No</td>';
                        }?>

            <?php if ($quote->delivery === true){
                    echo '<td> Yes</td>';
                    }else{
                        echo '<td> No</td>';
                        }?>

            <td><?= h($quote->status) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $quote->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quote->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Html->link(__('View in PDF'), ['action' => 'pdf', $quote->id], ['class' => 'btn btn-primary btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quote->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
