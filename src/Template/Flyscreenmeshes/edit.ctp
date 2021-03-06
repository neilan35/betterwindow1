<script>
<?=$this->Html->addCrumb('FlyScreenMeshes', '/flyscreenmeshes  ');?>
<?= $this->Html->addCrumb('Edit');?>
</script>
<?= $this->Form->create($flyscreenmesh); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Fly Screen Mesh
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="dropdown">
                                    <?= $this->Form->input('balrating_id', ['class' => 'combobox form-control',
                                                       'options' => $balratings,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Bal Ratings']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('meshtype_id', ['class' => 'combobox form-control',
                                                       'options' => $meshtypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Mesh Types']);?>
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
</div>