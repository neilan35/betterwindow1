<?= $this->Form->create($flyscreentype); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Fly Screen Type
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-8">
                                <div class="form-group">
                                <?= $this->Form->input('type', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('price', ['class' => 'form-control']) ?>
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