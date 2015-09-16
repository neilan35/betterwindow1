<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Quoteproducts'), ['controller' => 'Quoteproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quoteproduct'), ['controller' => 'Quoteproducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
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
           <!--  <th><?= $this->Paginator->sort('quoteno') ?></th> -->
            <th><?= $this->Paginator->sort('item') ?></th>
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
            <!-- <td><?= h($quote->quoteno) ?></td> -->
            <td><?= h($quote->item) ?></td>
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
                <?= $this->Html->link(__('View'), ['action' => 'view', $quote->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quote->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <!-- div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>
