<script>
<?=$this->Html->addCrumb('Enquiry', '/enquiries  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well col-sm-6">
        <div class="row-fluid">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Enquiry Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('ID') ?></b></h5>
                                    <p><?= $this->Number->format($enquiry->id) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Firstname') ?></b></h5>
                                    <p><?= h($enquiry->firstname) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Lastname') ?></b></h5>
                                    <p><?= h($enquiry->lastname) ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Email') ?></b></h5>
                                    <p><?= h($enquiry->email) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Phone') ?></b></h5>
                                    <p><?= h($enquiry->phone) ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <h5 class="subheader"><b><?= __('Phone') ?></b></h5>
                                    <p><?= h($enquiry->phone) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>