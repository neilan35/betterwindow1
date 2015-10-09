<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
</div>
 <div class="table-responsive">
    <table class="table table-hover" id="tableIndex"> 
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
                <?= $this->Html->link(__('View'), ['action' => 'view', $quoteproduct->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteproduct->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteproduct->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
