<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Fly Screen Mesh
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($flyscreenmesh->id) ?></p>
                        <h4 class="subheader"><?= __('Bal Rating') ?></h4>
                        <p><?= $flyscreenmesh->has('balrating') ? $this->Html->link($flyscreenmesh->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $flyscreenmesh->balrating->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Mesh Type') ?></h4>
                        <p><?= $flyscreenmesh->has('meshtype') ? $this->Html->link($flyscreenmesh->meshtype->id, ['controller' => 'Meshtypes', 'action' => 'view', $flyscreenmesh->meshtype->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Fly Screen Type') ?></h4>
                        <p><?= $flyscreenmesh->has('flyscreentype') ? $this->Html->link($flyscreenmesh->flyscreentype->id, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenmesh->flyscreentype->id]) : '' ?></p>
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
    <?php if (!empty($flyscreenmesh->quoteproducts)): ?>
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
        <?php foreach ($flyscreenmesh->quoteproducts as $quoteproducts): ?>
        <tr>
            <td><?= h($quoteproducts->id) ?></td>
            <td><?= h($quoteproducts->colour_id) ?></td>
            <td><?= h($quoteproducts->balrating_id) ?></td>
            <td><?= h($quoteproducts->itemtype_id) ?></td>
            <td><?= h($quoteproducts->design_id) ?></td>
            <td><?= h($quoteproducts->reveal_id) ?></td>
            <td><?= h($quoteproducts->flyscreenmesh_id) ?></td>
            <td><?= h($quoteproducts->glazing_id) ?></td>
            <td><?= h($quoteproducts->height) ?></td>
            <td><?= h($quoteproducts->width) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Quoteproducts', 'action' => 'view', $quoteproducts->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Quoteproducts', 'action' => 'edit', $quoteproducts->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quoteproducts', 'action' => 'delete', $quoteproducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteproducts->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
