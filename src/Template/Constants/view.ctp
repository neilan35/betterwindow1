<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Constant'), ['action' => 'edit', $constant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Constant'), ['action' => 'delete', $constant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $constant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Constants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Constant'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="constants view large-10 medium-9 columns">
    <h2><?= h($constant->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($constant->name) ?></p>
            <h6 class="subheader"><?= __('Code') ?></h6>
            <p><?= h($constant->code) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($constant->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($constant->value) ?></p>
        </div>
    </div>
</div>
