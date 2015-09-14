<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Corporate'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="corporate form large-10 medium-9 columns">
    <?= $this->Form->create($corporate); ?>
    
    <fieldset>


        <legend><?= __('Log in information') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>

        <legend><?= __('Corporate Information') ?></legend>
        <?php
            echo $this->Form->input('CustCompanyName');
            echo $this->Form->input('CustTradingName');
            echo $this->Form->input('CustABN');
            echo $this->Form->input('CustContactPerson');
        ?>

        <legend><?= __('Address') ?></legend>
        <?php
            echo $this->Form->input('CustAddress');
            echo $this->Form->input('CusSuburb');
            echo $this->Form->input('CustPostCode');
            echo $this->Form->input('CustState');
        ?>

        

    </fieldset>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
