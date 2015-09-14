<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Glazings
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($glazing->id) ?></p>
                        <h4 class="subheader"><?= __('Bal Rating') ?></h4>
                        <p><?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Usage') ?></h4>
                        <p><?= $glazing->has('usage') ? $this->Html->link($glazing->usage->id, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Glass Type') ?></h4>
                        <p><?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->id, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Composition') ?></h4>
                        <p><?= $glazing->has('composition') ? $this->Html->link($glazing->composition->name, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Obscurity') ?></h4>
                        <p><?= $glazing->obscurity ? __('Yes') : __('No'); ?></p>
                        <h4 class="subheader"><?= __('Safety Glazing') ?></h4>
                        <p><?= $glazing->safety ? __('Yes') : __('No'); ?></p>
                        <h4 class="subheader"><?= __('Price') ?></h4>
                        <p><?= $this->Number->format($glazing->price) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tableIndex').DataTable();
    });
</script>
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($glazing->products)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Design Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Flyscreenmesh Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Height') ?></th>
            <th><?= __('Width') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($glazing->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->colour_id) ?></td>
            <td><?= h($products->balrating_id) ?></td>
            <td><?= h($products->itemtype_id) ?></td>
            <td><?= h($products->design_id) ?></td>
            <td><?= h($products->reveal_id) ?></td>
            <td><?= h($products->flyscreenmesh_id) ?></td>
            <td><?= h($products->glazing_id) ?></td>
            <td><?= h($products->height) ?></td>
            <td><?= h($products->width) ?></td>

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
