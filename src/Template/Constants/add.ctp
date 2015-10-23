<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Constants'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="constants form large-10 medium-9 columns">
    <?= $this->Form->create($constant); ?>
    <fieldset>
        <legend><?= __('Add Constant') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('code');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
