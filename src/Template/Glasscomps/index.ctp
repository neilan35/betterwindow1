<div id="page-wrapper">
<h2 class="sub-header">Glass Compositions</h2>

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('type', 'Glass composition') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($glasscomps as $glasscomp): ?>
        <tr>
            <td><?= $this->Number->format($glasscomp->id) ?></td>
            <td><?= h($glasscomp->type) ?></td>
            <td><?= $this->Number->format($glasscomp->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $glasscomp->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $glasscomp->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $glasscomp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $glasscomp->id)]) ?>
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
</div>