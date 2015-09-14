<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $corporate->CorpID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $corporate->CorpID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Corporate'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="corporate form large-10 medium-9 columns">
    <?= $this->Form->create($corporate); ?>
    <fieldset>
        <legend><?= __('Edit Corporate') ?></legend>
        <?php
            echo $this->Form->input('CustID');
            echo $this->Form->input('CustType');
            echo $this->Form->input('CustCompanyName');
            echo $this->Form->input('CustTradingName');
            echo $this->Form->input('CustABN');
            echo $this->Form->input('CustContactPerson');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
