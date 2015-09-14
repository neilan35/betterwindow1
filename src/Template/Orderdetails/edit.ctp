<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderdetail->OrderDetailsID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailsID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="orderdetails form large-10 medium-9 columns">
    <?= $this->Form->create($orderdetail); ?>
    <fieldset>
        <legend><?= __('Edit Orderdetail') ?></legend>
        <?php
            echo $this->Form->input('OrderDetailsColour');
            echo $this->Form->input('OrderDetailsGlazingType');
            echo $this->Form->input('OrderDetailsBalRating');
            echo $this->Form->input('OrderDetailsRevealSize');
            echo $this->Form->input('OrderDetailsWinOpenType');
            echo $this->Form->input('OrderDetailsDoorOpenType');
            echo $this->Form->input('OrderDetailsFlyScreen');
            echo $this->Form->input('OrderDetailsFlyScreenType');
            echo $this->Form->input('OrderDetailsMesh');
            echo $this->Form->input('OrderDetailsInstallation');
            echo $this->Form->input('OrderDetailsInstallTypes');
            echo $this->Form->input('OrderDetailsDelivery');
            echo $this->Form->input('OrderDetailsPostcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
