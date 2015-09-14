<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Orderdetail'), ['action' => 'edit', $orderdetail->OrderDetailsID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orderdetail'), ['action' => 'delete', $orderdetail->OrderDetailsID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailsID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderdetails view large-10 medium-9 columns">
    <h2><?= h($orderdetail->OrderDetailsID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('OrderDetailsColour') ?></h6>
            <p><?= h($orderdetail->OrderDetailsColour) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsGlazingType') ?></h6>
            <p><?= h($orderdetail->OrderDetailsGlazingType) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsWinOpenType') ?></h6>
            <p><?= h($orderdetail->OrderDetailsWinOpenType) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsDoorOpenType') ?></h6>
            <p><?= h($orderdetail->OrderDetailsDoorOpenType) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsFlyScreen') ?></h6>
            <p><?= h($orderdetail->OrderDetailsFlyScreen) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsFlyScreenType') ?></h6>
            <p><?= h($orderdetail->OrderDetailsFlyScreenType) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsMesh') ?></h6>
            <p><?= h($orderdetail->OrderDetailsMesh) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsInstallation') ?></h6>
            <p><?= h($orderdetail->OrderDetailsInstallation) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsInstallTypes') ?></h6>
            <p><?= h($orderdetail->OrderDetailsInstallTypes) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsDelivery') ?></h6>
            <p><?= h($orderdetail->OrderDetailsDelivery) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('OrderDetailsID') ?></h6>
            <p><?= $this->Number->format($orderdetail->OrderDetailsID) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsBalRating') ?></h6>
            <p><?= $this->Number->format($orderdetail->OrderDetailsBalRating) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsRevealSize') ?></h6>
            <p><?= $this->Number->format($orderdetail->OrderDetailsRevealSize) ?></p>
            <h6 class="subheader"><?= __('OrderDetailsPostcode') ?></h6>
            <p><?= $this->Number->format($orderdetail->OrderDetailsPostcode) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($orderdetail->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($orderdetail->modified) ?></p>
        </div>
    </div>
</div>
