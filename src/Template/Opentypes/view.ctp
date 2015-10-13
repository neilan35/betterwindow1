<script>
<?=$this->Html->addCrumb('OpenType', '/opentypes  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Open Type Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Open Type Id') ?></b></h5>
                                    <p><?= $this->Number->format($opentype->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Name') ?></b></h5>
                                    <p><?= h($opentype->name) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class= "col-sm-5">
                                <h5 class="subheader"><b>Item Type ID</b></h5>
                                <p><?= $opentype->has('itemtype') ? $this->Html->link($opentype->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $opentype->itemtype->id]) : '' ?></p>
                            </div>
                        </div>
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
                <?= $this->Html->link(__('View'), ['controller' => 'Designs', 'action' => 'view', $designs->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Designs', 'action' => 'edit', $designs->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designs', 'action' => 'delete', $designs->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $designs->id)]) ?>
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
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenopentypes->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenopentypes', 'action' => 'edit', $flyscreenopentypes->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenopentypes', 'action' => 'delete', $flyscreenopentypes->id], ['class' => 'btn btn-danger btn-xs','confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
