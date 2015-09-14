<?= $this->Form->create($composition); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Compositions
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-8">
                                <div class="form-group">
                                <?= $this->Form->input('name', ['class' => 'form-control']) ?>
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