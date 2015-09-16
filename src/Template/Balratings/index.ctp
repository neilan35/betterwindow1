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
            <th><?= $this->Paginator->sort('balrating') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($balratings as $balrating): ?>
        <tr>
            <td><?= $this->Number->format($balrating->id) ?></td>
            <td><?= h($balrating->balrating) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $balrating->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $balrating->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $balrating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $balrating->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>
