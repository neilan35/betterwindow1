
<div class="quoteproducts view large-10 medium-9 columns">
    <h2><?= h($quoteproduct->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Quote') ?></h6>
            <p><?= $quoteproduct->has('quote') ? $this->Html->link($quoteproduct->quote->id, ['controller' => 'Quotes', 'action' => 'view', $quoteproduct->quote->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Colour') ?></h6>
            <p><?= $quoteproduct->has('colour') ? $this->Html->link($quoteproduct->colour->name, ['controller' => 'Colours', 'action' => 'view', $quoteproduct->colour->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Balrating') ?></h6>
            <p><?= $quoteproduct->has('balrating') ? $this->Html->link($quoteproduct->balrating->balrating, ['controller' => 'Balratings', 'action' => 'view', $quoteproduct->balrating->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Itemtype') ?></h6>
            <p><?= $quoteproduct->has('itemtype') ? $this->Html->link($quoteproduct->itemtype->type, ['controller' => 'Itemtypes', 'action' => 'view', $quoteproduct->itemtype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Design') ?></h6>
            <p><?= $quoteproduct->has('design') ? $this->Html->link($quoteproduct->design->id, ['controller' => 'Designs', 'action' => 'view', $quoteproduct->design->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Reveal') ?></h6>
            <p><?= $quoteproduct->has('reveal') ? $this->Html->link($quoteproduct->reveal->type, ['controller' => 'Reveals', 'action' => 'view', $quoteproduct->reveal->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flyscreenmesh') ?></h6>
            <p><?= $quoteproduct->has('flyscreenmesh') ? $this->Html->link($quoteproduct->flyscreenmesh->id, ['controller' => 'Flyscreenmeshes', 'action' => 'view', $quoteproduct->flyscreenmesh->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Glazing') ?></h6>
            <p><?= $quoteproduct->has('glazing') ? $this->Html->link($quoteproduct->glazing->id, ['controller' => 'Glazings', 'action' => 'view', $quoteproduct->glazing->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($quoteproduct->id) ?></p>
            <h6 class="subheader"><?= __('Height') ?></h6>
            <p><?= $this->Number->format($quoteproduct->height,['after' => ' mm']) ?></p>
            <h6 class="subheader"><?= __('Width') ?></h6>
            <p><?= $this->Number->format($quoteproduct->width,['after' => ' mm']) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($quoteproduct->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($quoteproduct->modified) ?></p>
        </div>
    </div>
</div>
