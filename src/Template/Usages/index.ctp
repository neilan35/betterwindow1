<script>
<?=$this->Html->addCrumb('Usages', '/usages  ');?>
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
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($usages as $usage): ?>
        <tr>
            <td><?= $this->Number->format($usage->id) ?></td>
            <td><?= h($usage->description) ?></td>  
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $usage->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usage->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usage->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $usage->id)]) ?>
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
