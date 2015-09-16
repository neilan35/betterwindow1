<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Enquiries
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('ID') ?></h4>
                        <p><?= $this->Number->format($enquiry->id) ?></p>
                        <h4 class="subheader"><?= __('Firstname') ?></h4>
                        <p><?= h($enquiry->firstname) ?></p>
                        <h4 class="subheader"><?= __('Lastname') ?></h4>
                        <p><?= h($enquiry->lastname) ?></p>
                        <h4 class="subheader"><?= __('Email') ?></h4>
                        <p><?= h($enquiry->email) ?></p>
                        <h4 class="subheader"><?= __('Phone') ?></h4>
                        <p><?= h($enquiry->phone) ?></p>
                        <h4 class="subheader"><?= __('Comment') ?></h4>
                        <p><?= h($enquiry->comment) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>