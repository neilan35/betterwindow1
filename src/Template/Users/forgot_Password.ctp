<!-- src/Template/Users/forgot_Password.ctp -->
<?php $this->assign('title', 'I have forgotten my password!'); ?>

<div class="forgotPassword form">
    <?php echo $this->Form->create('User', ['action' => 'forgotPassword', 'novalidate' => true]); ?>
    <fieldset>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <?php echo $this->Form->input('email',['class' => 'form-control',
                                                       'placeholder' => 'Enter email address',
                                                       'label' => false]);?>
            </div>
        </div>
        <div class="form-group">
            <?= $this->Form->button('Recover', ['type' => 'submit', 'class' => 'btn btn-lg btn-success btn-block']) ?>
            <?php echo $this->Form->end();?>
        </div>
    </fieldset>
</div>