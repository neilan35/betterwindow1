<script>
<?=$this->Html->addCrumb('Employee', '/employees  ');?>
<?= $this->Html->addCrumb('Add');?>

</script>
<?= $this->Form->create($employee); ?>
<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-horizontal" role="form">
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
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

                                         <div class="col-lg-6"> 
                                            <div class="form-group" >
                                             <?= $this->Form->input('user.email', ['class' => 'form-control']) ?>
                                            </div>

                                            <div class="form-group">
                                             <?= $this->Form->input('user.password', ['class' => 'form-control']) ?>
                                            </div> 
                                            <div class="form-group">
                                             <?= $this->Form->input('user.confirm_password', ['class' => 'form-control','type'=>'password']) ?>
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
                                        
                                        
                                       
                                       


<!-- <div class="employees form large-10 medium-9 columns">
    <?= $this->Form->create($employee); ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('role_id', ['options' => $roles]);


             echo $this->Form->input('user.email');
              echo $this->Form->input('user.password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->