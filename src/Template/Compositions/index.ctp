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
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($compositions as $composition): ?>
        <tr>
            <td><?= $this->Number->format($composition->id) ?></td>
            <td><?= h($composition->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $composition->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $composition->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $composition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $composition->id)]) ?>
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
