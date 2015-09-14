<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quoteproducts'), ['controller' => 'Quoteproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quoteproduct'), ['controller' => 'Quoteproducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes form large-10 medium-9 columns">
    <?= $this->Form->create($quote); ?>
    <fieldset>
        <legend><?= __('Edit Quote') ?></legend>
        <?php
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('quoteno');
            echo $this->Form->input('item');
            echo $this->Form->input('unitcost');
            echo $this->Form->input('quantity');
            echo $this->Form->input('installation');
            echo $this->Form->input('installtype');
            echo $this->Form->input('delivery');
            echo $this->Form->input('deliverytype');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
