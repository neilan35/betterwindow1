<script>
<?=$this->Html->addCrumb('Pictures', '/pictures  ');?>
<?= $this->Html->addCrumb('Add');?>

</script>
<?= $this->Form->create($picture,['enctype' => 'multipart/form-data']); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a Picture
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <?= $this->Form->input('filename', ['type' => 'file','label' => false]); ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('description', ['class' => 'form-control']); ?>
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