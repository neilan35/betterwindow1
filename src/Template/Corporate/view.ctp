<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Corporate'), ['action' => 'edit', $corporate->CorpID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Corporate'), ['action' => 'delete', $corporate->CorpID], ['confirm' => __('Are you sure you want to delete # {0}?', $corporate->CorpID)]) ?> </li>
        <li><?= $this->Html->link(__('List Corporate'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corporate'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="corporate view large-10 medium-9 columns">
    <h2><?= h($corporate->CorpID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('CustType') ?></h6>
            <p><?= h($corporate->CustType) ?></p>
            <h6 class="subheader"><?= __('CustCompanyName') ?></h6>
            <p><?= h($corporate->CustCompanyName) ?></p>
            <h6 class="subheader"><?= __('CustTradingName') ?></h6>
            <p><?= h($corporate->CustTradingName) ?></p>
            <h6 class="subheader"><?= __('CustContactPerson') ?></h6>
            <p><?= h($corporate->CustContactPerson) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('CorpID') ?></h6>
            <p><?= $this->Number->format($corporate->CorpID) ?></p>
            <h6 class="subheader"><?= __('CustID') ?></h6>
            <p><?= $this->Number->format($corporate->CustID) ?></p>
            <h6 class="subheader"><?= __('CustABN') ?></h6>
            <p><?= $this->Number->format($corporate->CustABN) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($corporate->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($corporate->modified) ?></p>
        </div>
    </div>
</div>
