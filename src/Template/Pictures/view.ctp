<script>
<?=$this->Html->addCrumb('Pictures', '/pictures  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Picture Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h5 class="subheader"><b><?= __('Picture Id') ?></b></h5>
                                    <p><?= $this->Number->format($picture->id) ?></p>
                                </div>
                                <div class="col-sm-5">
                                    <h5 class="subheader"><b><?= __('Filename') ?></b></h5>
                                    <p><?= h($picture->filename) ?></p>
                                </div>
                                <div class="col-sm-5">
                                    <h5 class="subheader"><b><?= __('Description') ?></b></h5>
                                    <p><?= $this->Text->autoParagraph(h($picture->description)); ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
    <?php echo $this->Html->image('uploads/designs/'.$picture->filename, [
    "alt" => "CakePHP",'class' => 'img-thumbnail img-responsive']);
    ?>
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
    <?php if (!empty($picture->designs)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Picture Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($picture->designs as $designs): ?>
        <tr>
            <td><?= h($designs->id) ?></td>
            <td><?= h($designs->opentype_id) ?></td>
            <td><?= h($designs->picture_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Designs', 'action' => 'view', $designs->id], ['class' => 'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Designs', 'action' => 'edit', $designs->id], ['class' => 'btn btn-success btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designs', 'action' => 'delete', $designs->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $designs->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
