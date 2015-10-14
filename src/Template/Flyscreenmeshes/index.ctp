<script>
<?=$this->Html->addCrumb('FlyScreenMeshes', '/flyscreenmeshes  ');?>
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
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('meshtype_id') ?></th>
            <th><?= $this->Paginator->sort('flyscreentype_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flyscreenmeshes as $flyscreenmesh): ?>
        <tr>
            <td><?= $this->Number->format($flyscreenmesh->id) ?></td>
            <td>
                <?= $flyscreenmesh->has('balrating') ? $this->Html->link($flyscreenmesh->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $flyscreenmesh->balrating->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenmesh->has('meshtype') ? $this->Html->link($flyscreenmesh->meshtype->type, ['controller' => 'Meshtypes', 'action' => 'view', $flyscreenmesh->meshtype->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenmesh->has('flyscreentype') ? $this->Html->link($flyscreenmesh->flyscreentype->id, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenmesh->flyscreentype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreenmesh->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenmesh->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenmesh->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmesh->id)]) ?>
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
