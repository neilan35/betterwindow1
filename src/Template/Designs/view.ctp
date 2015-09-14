<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Designs
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($design->id) ?></p>
                        <h4 class="subheader"><?= __('Open Type') ?></h4>
                        <p><?= $design->has('opentype') ? $this->Html->link($design->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $design->opentype->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Picture') ?></h4>
                        <p><?= $design->has('picture') ? $this->Html->link($design->picture->id, ['controller' => 'Pictures', 'action' => 'view', $design->picture->id]) : '' ?></p>
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
    <?php if (!empty($design->products)): ?>
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
        <?php foreach ($design->products as $products): ?>
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
