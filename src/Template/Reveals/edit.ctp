<?= $this->Form->create($reveal); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Reveal
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <?= $this->Form->input('type', ['class' => 'form-control']) ?>
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