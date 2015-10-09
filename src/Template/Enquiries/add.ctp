<?= $this->Form->create($enquiry); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add an Enquiry
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <?= $this->Form->input('firstname', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('lastname', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('phone', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('comment', ['class' => 'form-control']) ?>
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