<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quoteproducts'), ['controller' => 'Quoteproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quoteproduct'), ['controller' => 'Quoteproducts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes view large-10 medium-9 columns">
    <h2><?= h($quote->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $quote->has('customer') ? $this->Html->link($quote->customer->first_name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quoteno') ?></h6>
            <p><?= h($quote->quoteno) ?></p>
            <h6 class="subheader"><?= __('Item') ?></h6>
            <p><?= h($quote->item) ?></p>
            <h6 class="subheader"><?= __('Installtype') ?></h6>
            <p><?= h($quote->installtype) ?></p>
            <h6 class="subheader"><?= __('Deliverytype') ?></h6>
            <p><?= h($quote->deliverytype) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($quote->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($quote->id) ?></p>
            <h6 class="subheader"><?= __('Unitcost') ?></h6>
            <p><?= $this->Number->format($quote->unitcost) ?></p>
            <h6 class="subheader"><?= __('Quantity') ?></h6>
            <p><?= $this->Number->format($quote->quantity) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($quote->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($quote->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Installation') ?></h6>
            <p><?= $quote->installation ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Delivery') ?></h6>
            <p><?= $quote->delivery ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Quoteproducts') ?></h4>
    <?php if (!empty($quote->quoteproducts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Quote Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Design Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Flyscreenmesh Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Height') ?></th>
            <th><?= __('Width') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($quote->quoteproducts as $quoteproducts): ?>
        <tr>
            <td><?= h($quoteproducts->id) ?></td>
            <td><?= h($quoteproducts->quote_id) ?></td>
            <td><?= h($quoteproducts->colour_id) ?></td>
            <td><?= h($quoteproducts->balrating_id) ?></td>
            <td><?= h($quoteproducts->itemtype_id) ?></td>
            <td><?= h($quoteproducts->design_id) ?></td>
            <td><?= h($quoteproducts->reveal_id) ?></td>
            <td><?= h($quoteproducts->flyscreenmesh_id) ?></td>
            <td><?= h($quoteproducts->glazing_id) ?></td>
            <td><?= h($quoteproducts->height) ?></td>
            <td><?= h($quoteproducts->width) ?></td>
            <td><?= h($quoteproducts->created) ?></td>
            <td><?= h($quoteproducts->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Quoteproducts', 'action' => 'view', $quoteproducts->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Quoteproducts', 'action' => 'edit', $quoteproducts->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quoteproducts', 'action' => 'delete', $quoteproducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteproducts->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
