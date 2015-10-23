<script>
<?=$this->Html->addCrumb('Constants', '/constants  ');?>
<?= $this->Html->addCrumb('Edit');?>

</script>

<?= $this->Form->create($constant); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a constant
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <?= $this->Form->input('name', ['class' => 'form-control']) ?>
                                    <?= $this->Form->input('code', ['class' => 'form-control']) ?>
                                    <?= $this->Form->input('value', ['class' => 'form-control']) ?>

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