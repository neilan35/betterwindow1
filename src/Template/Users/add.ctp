
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
   

 <fieldset>
        <legend><?= __('Add User (Login Details)') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>

  

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
