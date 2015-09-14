<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List of Users'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List of Customers'), ['controller' => 'Customers','action' => 'index']) ?></li>
    </ul>
</div>
  <h2 class="sub-header">Order Details </h2>
          <div class="table-responsive">
            <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('OrderDetailsID', 'Order ID') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsColour', 'Colour') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsGlazingType', 'Glazing Type') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsBalRating', 'BAL Rating') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsRevealSize', 'Reveal Size') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsWinOpenType', 'Window Open Type') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsDoorOpenType', 'Door Open Type') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsFlyScreen', 'Fly Screen') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsFlyScreenType', 'Fly Screen Type') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsMesh', 'Mesh') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsInstallation', 'Installation') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsInstallTypes', 'Installation Type') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsDelivery', 'Delivery') ?></th>
            <th><?= $this->Paginator->sort('OrderDetailsPostcode', 'Postcode') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>

            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orderdetails as $orderdetail): ?>
        <tr>
            <td><?= $this->Number->format($orderdetail->OrderDetailsID) ?></td>
            <td><?= h($orderdetail->OrderDetailsColour) ?></td>
            <td><?= h($orderdetail->OrderDetailsGlazingType) ?></td>
            <td><?= $this->Number->format($orderdetail->OrderDetailsBalRating) ?></td>
            <td><?= $this->Number->format($orderdetail->OrderDetailsRevealSize) ?></td>
            <td><?= h($orderdetail->OrderDetailsWinOpenType) ?></td>
            <td><?= h($orderdetail->OrderDetailsDoorOpenType) ?></td>
            <td><?= h($orderdetail->OrderDetailsFlyScreen) ?></td>
            <td><?= h($orderdetail->OrderDetailsFlyScreenType) ?></td>
            <td><?= h($orderdetail->OrderDetailsMesh) ?></td>
            <td><?= h($orderdetail->OrderDetailsInstallation) ?></td>
            <td><?= h($orderdetail->OrderDetailsInstallTypes) ?></td>
            <td><?= h($orderdetail->OrderDetailsDelivery) ?></td>
            <td><?= $this->Number->format($orderdetail->OrderDetailsPostcode) ?></td>
            <td><?= h($orderdetail->created) ?></td>
            <td><?= h($orderdetail->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $orderdetail->OrderDetailsID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderdetail->OrderDetailsID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderdetail->OrderDetailsID], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->OrderDetailsID)]) ?>
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
