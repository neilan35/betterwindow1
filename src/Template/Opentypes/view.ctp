<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Open Types
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($opentype->id) ?></p>
                        <h4 class="subheader"><?= __('Item Type') ?></h4>
                        <p><?= $opentype->has('itemtype') ? $this->Html->link($opentype->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $opentype->itemtype->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Name') ?></h4>
                        <p><?= h($opentype->name) ?></p>
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
    <h4 class="subheader"><?= __('Related Designs') ?></h4>
    <?php if (!empty($opentype->designs)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Picture Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($opentype->designs as $designs): ?>
        <tr>
            <td><?= h($designs->id) ?></td>
            <td><?= h($designs->opentype_id) ?></td>
            <td><?= h($designs->picture_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Designs', 'action' => 'view', $designs->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Designs', 'action' => 'edit', $designs->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designs', 'action' => 'delete', $designs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designs->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>

<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Flyscreenopentypes') ?></h4>
    <?php if (!empty($opentype->flyscreenopentypes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Flyscreentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($opentype->flyscreenopentypes as $flyscreenopentypes): ?>
        <tr>
            <td><?= h($flyscreenopentypes->id) ?></td>
            <td><?= h($flyscreenopentypes->opentype_id) ?></td>
            <td><?= h($flyscreenopentypes->flyscreentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenopentypes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenopentypes', 'action' => 'edit', $flyscreenopentypes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenopentypes', 'action' => 'delete', $flyscreenopentypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
