<script>
<?=$this->Html->addCrumb('FlyScreenOpenType', '/Flyscreenopentypes  ');?>
<?= $this->Html->addCrumb('Edit');?>
</script>
<?= $this->Form->create($flyscreenopentype); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Fly Screen Open Type
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="dropdown">
                                    <?= $this->Form->input('opentype_id', ['class' => 'combobox form-control',
                                                       'options' => $opentypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Open Types']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('flyscreentype_id', ['class' => 'combobox form-control',
                                                       'options' => $flyscreentypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Fly Screen Types']);?>
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