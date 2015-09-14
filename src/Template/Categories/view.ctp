<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Category
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Category Id') ?></h4>
                        <p><?= $this->Number->format($category->id) ?></p>
                        <h4 class="subheader"><?= __('Price') ?></h4>
                        <p><?= $this->Number->format($category->price) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Colours') ?></h4>
    <?php if (!empty($category->colours)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->colours as $colours): ?>
        <tr>
            <td><?= h($colours->id) ?></td>
            <td><?= h($colours->category_id) ?></td>
            <td><?= h($colours->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Colours', 'action' => 'view', $colours->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Colours', 'action' => 'edit', $colours->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Colours', 'action' => 'delete', $colours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colours->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
