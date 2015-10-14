<script>
<?=$this->Html->addCrumb('MeshType', '/meshtypes  ');?>
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
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($meshtypes as $meshtype): ?>
        <tr>
            <td><?= $this->Number->format($meshtype->id) ?></td>
            <td><?= h($meshtype->type) ?></td>
            <td><?= $this->Number->format($meshtype->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $meshtype->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meshtype->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meshtype->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $meshtype->id)]) ?>
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
