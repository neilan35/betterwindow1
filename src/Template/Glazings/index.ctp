<script>
<?=$this->Html->addCrumb('Glazing', '/glazings  ');?>
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
            <th><?= $this->Paginator->sort('usage_id') ?></th>
            <th><?= $this->Paginator->sort('glasstype_id') ?></th>
            <th><?= $this->Paginator->sort('composition_id') ?></th>
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('obscurity') ?></th>
            <th><?= $this->Paginator->sort('safety') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($glazings as $glazing): ?>
        <tr>
            <td><?= $this->Number->format($glazing->id) ?></td>
            <td>
                <?= $glazing->has('usage') ? $this->Html->link($glazing->usage->description, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->type, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('composition') ? $this->Html->link($glazing->composition->name, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->balrating, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?>
            </td>
            <td><?= h($glazing->obscurity) ?></td>
            <td><?= h($glazing->safety) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $glazing->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $glazing->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $glazing->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $glazing->id)]) ?>
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
