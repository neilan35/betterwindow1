<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Userz'), ['action' => 'edit', $userz->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userz'), ['action' => 'delete', $userz->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $userz->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Userz'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userz'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userz view large-10 medium-9 columns">
    <h2><?= h($userz->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('CustID') ?></h6>
            <p><?= h($userz->CustID) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($userz->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($userz->password) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($userz->ID) ?></p>
        </div>
    </div>
</div>
