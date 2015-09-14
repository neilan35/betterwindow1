<div id="page-wrapper">
<h2 class="sub-header">New Window Open Types</h2>

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('type', 'Window Open Type') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($winopentypes as $winopentype): ?>
        <tr>
            <td><?= $this->Number->format($winopentype->id) ?></td>
            <td><?= h($winopentype->type) ?></td>
            <td><?= $this->Number->format($winopentype->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $winopentype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $winopentype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $winopentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winopentype->id)]) ?>
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