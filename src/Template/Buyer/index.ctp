<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Buyer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="buyer index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('CustAddress') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($buyer as $buyer): ?>
        <tr>
            <td><?= $this->Number->format($buyer->id) ?></td>
            <td>
                <?= $buyer->has('user') ? $this->Html->link($buyer->user->name, ['controller' => 'Users', 'action' => 'view', $buyer->user->id]) : '' ?>
            </td>
            <td><?= h($buyer->CustAddress) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $buyer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $buyer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $buyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyer->id)]) ?>
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
