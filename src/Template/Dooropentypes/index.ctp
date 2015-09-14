<div id="page-wrapper">
<h2 class="sub-header">Door Opening Types</h2>

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('type', 'Door opening type') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($dooropentypes as $dooropentype): ?>
        <tr>
            <td><?= $this->Number->format($dooropentype->id) ?></td>
            <td><?= h($dooropentype->type) ?></td>
            <td><?= $this->Number->format($dooropentype->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dooropentype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dooropentype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dooropentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dooropentype->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>