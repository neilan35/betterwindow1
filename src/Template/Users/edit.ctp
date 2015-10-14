
  <script>
<?=$this->Html->addCrumb('Users', '/users');?>
<?= $this->Html->addCrumb('Edit');?>

</script>
<?= $this->Form->create($user); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('password', ['class' => 'form-control']) ?>
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