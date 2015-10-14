<script>
<?=$this->Html->addCrumb('Glazing', '/glazings  ');?>
<?= $this->Html->addCrumb('Add');?>

</script>
<?= $this->Form->create($glazing); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add a Glazing
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="dropdown">
                                    <?= $this->Form->input('usage_id', ['class' => 'combobox form-control',
                                                       'options' => $usages,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Glass Usage']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('glasstype_id', ['class' => 'combobox form-control',
                                                       'options' => $glasstypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Glass Types']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('composition_id', ['class' => 'combobox form-control',
                                                       'options' => $compositions,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Glass Compositions']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('balrating_id', ['class' => 'combobox form-control',
                                                       'options' => $balratings,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Bal Ratings']);?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('obscurity') ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('safety') ?>
                                </div>
                                <div class="form-group">
                                  <?= $this->Form->input('price', ['class' => 'form-control']) ?>
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