<script>
<?=$this->Html->addCrumb('Pictures', '/pictures  ');?>
<?= $this->Html->addCrumb('Edit');?>

</script>
<?= $this->Form->create($picture); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Picture
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
                                    <?= $this->Form->input('description', ['class' => 'form-control']) ?>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            <button type="submit" class="btn btn-default">Submit </button>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>