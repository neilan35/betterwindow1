<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Winopentype'), ['action' => 'edit', $winopentype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Winopentype'), ['action' => 'delete', $winopentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winopentype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Winopentypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Winopentype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="winopentypes view large-10 medium-9 columns">
    <h2><?= h($winopentype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Window Open Type') ?></h6>
            <p><?= h($winopentype->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($winopentype->id) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($winopentype->price) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($winopentype->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Winopentype Id') ?></th>
            <th><?= __('Dooropentype Id') ?></th>
            <th><?= __('Flyscreen Id') ?></th>
            <th><?= __('Glasscomp Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($winopentype->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->colour_id) ?></td>
            <td><?= h($products->glazing_id) ?></td>
            <td><?= h($products->balrating_id) ?></td>
            <td><?= h($products->reveal_id) ?></td>
            <td><?= h($products->winopentype_id) ?></td>
            <td><?= h($products->dooropentype_id) ?></td>
            <td><?= h($products->flyscreen_id) ?></td>
            <td><?= h($products->glasscomp_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
</div>