<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Constant'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="constants index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
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
                <?= $this->Html->link(__('View'), ['action' => 'view', $constant->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $constant->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $constant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $constant->id)]) ?>
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
