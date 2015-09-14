<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Corporate'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="corporate index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('CorpID') ?></th>
            <th><?= $this->Paginator->sort('CustID') ?></th>
            <th><?= $this->Paginator->sort('CustType') ?></th>
            <th><?= $this->Paginator->sort('CustCompanyName') ?></th>
            <th><?= $this->Paginator->sort('CustTradingName') ?></th>
            <th><?= $this->Paginator->sort('CustABN') ?></th>
            <th><?= $this->Paginator->sort('CustContactPerson') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($corporate as $corporate): ?>
        <tr>
            <td><?= $this->Number->format($corporate->CorpID) ?></td>
            <td><?= $this->Number->format($corporate->CustID) ?></td>
            <td><?= h($corporate->CustType) ?></td>
            <td><?= h($corporate->CustCompanyName) ?></td>
            <td><?= h($corporate->CustTradingName) ?></td>
            <td><?= $this->Number->format($corporate->CustABN) ?></td>
            <td><?= h($corporate->CustContactPerson) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $corporate->CorpID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $corporate->CorpID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $corporate->CorpID], ['confirm' => __('Are you sure you want to delete # {0}?', $corporate->CorpID)]) ?>
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
