<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $constant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $constant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Constants'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="constants form large-10 medium-9 columns">
    <?= $this->Form->create($constant); ?>
    <fieldset>
        <legend><?= __('Edit Constant') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('code');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
