<script>
<?=$this->Html->addCrumb('Constants', '/constants  ');?>
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
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('code') ?></th>
            <th><?= $this->Paginator->sort('value') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($constants as $constant): ?>
        <tr>
            <td><?= $this->Number->format($constant->id) ?></td>
            <td><?= h($constant->name) ?></td>
            <td><?= h($constant->code) ?></td>
            <td><?= $this->Number->format($constant->value) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $constant->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $constant->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $constant->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $constant->id)]) ?>
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
