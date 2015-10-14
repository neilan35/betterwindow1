<script>
<?=$this->Html->addCrumb('Employee', '/employees  ');?>
<?= $this->Html->addCrumb('Edit');?>

</script>
<?= $this->Form->create($employee); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Employee
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-10">
                                <div class="form-group">
                                <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('role_id', ['class' => 'form-control', 'options' => $roles]) ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>