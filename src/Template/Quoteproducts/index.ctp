<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Quoteproduct'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colours'), ['controller' => 'Colours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colour'), ['controller' => 'Colours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['controller' => 'Itemtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['controller' => 'Itemtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designs'), ['controller' => 'Designs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['controller' => 'Designs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reveals'), ['controller' => 'Reveals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reveal'), ['controller' => 'Reveals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quoteproducts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('quote_id') ?></th>
            <th><?= $this->Paginator->sort('colour_id') ?></th>
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('itemtype_id') ?></th>
            <th><?= $this->Paginator->sort('design_id') ?></th>
            <th><?= $this->Paginator->sort('reveal_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($quoteproducts as $quoteproduct): ?>
        <tr>
            <td><?= $this->Number->format($quoteproduct->id) ?></td>
            <td>
                <?= $quoteproduct->has('quote') ? $this->Html->link($quoteproduct->quote->id, ['controller' => 'Quotes', 'action' => 'view', $quoteproduct->quote->id]) : '' ?>
            </td>
            <td>
                <?= $quoteproduct->has('colour') ? $this->Html->link($quoteproduct->colour->name, ['controller' => 'Colours', 'action' => 'view', $quoteproduct->colour->id]) : '' ?>
            </td>
            <td>
                <?= $quoteproduct->has('balrating') ? $this->Html->link($quoteproduct->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $quoteproduct->balrating->id]) : '' ?>
            </td>
            <td>
                <?= $quoteproduct->has('itemtype') ? $this->Html->link($quoteproduct->itemtype->type, ['controller' => 'Itemtypes', 'action' => 'view', $quoteproduct->itemtype->id]) : '' ?>
            </td>
            <td>
                <?= $quoteproduct->has('design') ? $this->Html->link($quoteproduct->design->id, ['controller' => 'Designs', 'action' => 'view', $quoteproduct->design->id]) : '' ?>
            </td>
            <td>
                <?= $quoteproduct->has('reveal') ? $this->Html->link($quoteproduct->reveal->id, ['controller' => 'Reveals', 'action' => 'view', $quoteproduct->reveal->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $quoteproduct->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteproduct->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteproduct->id)]) ?>
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
