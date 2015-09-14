<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Orderdetails'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="orderdetails form large-10 medium-9 columns">
    <?= $this->Form->create($orderdetail); ?>
    <fieldset>
        <legend><?= __('Add Your Order Details') ?></legend>

        <?= $this->Form->input('OrderDetailsColour',['label' => 'Color',
            'options' => ['white' => 'White', 
            'black' => 'Black',
            'orange' => 'Orange']
        ]) ?>


        <?= $this->Form->input('OrderDetailsGlazingType',['label' => 'Glazing Type',
            'options' => ['single glazed' => 'Single Glazed', 
            'double glazed' => 'Double Glazed',
            'triple glazed' => 'Triple Glazed']
        ]) ?>

        <?= $this->Form->input('OrderDetailsBalRating',['label' => 'BAL Rating']) ?>
        <?= $this->Form->input('OrderDetailsRevealSize',['label' => 'Reveal Size']) ?>
       

        <?= $this->Form->input('OrderDetailsWinOpenType', ['label' => 'Main Window Opening Type',
            'options' => ['standard' => 'Standard', 
            'french' => 'French',
            'sliding' => 'Sliding']
        ]) ?>


        <?= $this->Form->input('OrderDetailsDoorOpenType', ['label' => 'Main Door Opening Type',
            'options' => ['standard' => 'Standard', 
            'french' => 'French',
            'sliding' => 'Sliding']
        ]) ?>


        <?= $this->Form->input('OrderDetailsFlyScreen',['label' => 'Fly Screen']) ?>


        <?= $this->Form->input('OrderDetailsFlyScreenType', ['label' => 'Fly Screen Type',
            'options' => ['mesh' => 'Mesh', 
            'aluminium' => 'Aluminium',
            'fibreglass' => 'FibreGlass']
        ]) ?>


        <?= $this->Form->input('OrderDetailsMesh', ['label' => 'Mesh (inputs have not been specified by the client)',
            'options' => ['mesh' => 'Mesh', 
            'aluminium' => 'Aluminium',
            'fibreglass' => 'FibreGlass']
        ]) ?>


        <?= $this->Form->input('OrderDetailsInstallation',['label' => 'Installation (Yes or No)',
        'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
        ] )  ?>


        <?= $this->Form->input('OrderDetailsInstallTypes',['label' => 'Installation Types',
        'options' => [ 
            'new home' => 'New Home',
            'replacement' => 'Replacement']
        ]) ?>


        <?= $this->Form->input('OrderDetailsDelivery', ['label' => 'Delivery (Yes or No)',
        'options' => [ 
            'yes' => 'Yes',
            'no' => 'No']
        ]) ?>

        <?= $this->Form->input('OrderDetailsPostcode', ['label' => 'Postcode']) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
