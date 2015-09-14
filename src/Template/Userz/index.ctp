<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Userz'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="userz index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('CustID') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userz as $userz): ?>
        <tr>
            <td><?= $this->Number->format($userz->ID) ?></td>
            <td><?= h($userz->CustID) ?></td>
            <td><?= h($userz->email) ?></td>
            <td><?= h($userz->password) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userz->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userz->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userz->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $userz->ID)]) ?>
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
