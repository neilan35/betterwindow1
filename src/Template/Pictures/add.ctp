<script>
<?=$this->Html->addCrumb('Pictures', '/pictures  ');?>
<?= $this->Html->addCrumb('Add');?>

</script>
<?= $this->Form->create($picture); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a Picture
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <?= $this->Form->input('filename', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                     <label for="attachments">Attachments</label>
                                <?= $this->Form->input('attachments[]', ['type' => 'file', 'multiple' => true, 'label' => false, 'class' => 'form-control', 'id' => 'photo']); ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('description', ['class' => 'form-control']) ?>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                 <?= $this->Form->button('Reset', ['style'=>'width:100px', 'type' => 'reset', 'class' => 'btn btn-warning']) ?>
            <button type="submit" class="btn btn-default">Submit </button>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>