<script>
<?=$this->Html->addCrumb('FlyScreenOpenType', '/Flyscreenopentypes  ');?>
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
            <th><?= $this->Paginator->sort('itemtype_id') ?></th>
            <th><?= $this->Paginator->sort('opentype_id') ?></th>
            <th><?= $this->Paginator->sort('flyscreentype_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flyscreenopentypes as $flyscreenopentype): ?>
        <tr>
            <td><?= $this->Number->format($flyscreenopentype->id) ?></td>
            <td><?= h($flyscreenopentype->opentype->itemtype->type) ?></td>
            <td><?= $flyscreenopentype->has('opentype') ? $this->Html->link($flyscreenopentype->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $flyscreenopentype->opentype->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenopentype->has('flyscreentype') ? $this->Html->link($flyscreenopentype->flyscreentype->type, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenopentype->flyscreentype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreenopentype->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenopentype->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenopentype->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentype->id)]) ?>
            </td>
        </tr>
<!-- var_dump($flyscreenopentype->opentype->itemtype->type); -->
            <!-- die();  -->
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
