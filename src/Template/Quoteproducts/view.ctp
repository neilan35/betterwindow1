<script>
<?=$this->Html->addCrumb('QuoteProduct', '/quoteproducts  ');?>
<?= $this->Html->addCrumb('View');?>

</script>
<div class="row">
    <div class="container-fluid well span6">
        <div class="row-fluid">
            <div class="col-sm-7">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Quote Products Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Quote Products Id') ?></b></h5>
                                    <p><?= $this->Number->format($quoteproduct->id) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Colour') ?></b></h5>
                                    <p><?= $quoteproduct->has('colour') ? $this->Html->link($quoteproduct->colour->name, ['controller' => 'Colours', 'action' => 'view', $quoteproduct->colour->id]) : '' ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Balrating') ?></b></h5>
                                    <p><?= $quoteproduct->has('balrating') ? $this->Html->link($quoteproduct->balrating->balrating, ['controller' => 'Balratings', 'action' => 'view', $quoteproduct->balrating->id]) : '' ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Itemtype') ?></b></h5>
                                    <p><?= $quoteproduct->has('itemtype') ? $this->Html->link($quoteproduct->itemtype->type, ['controller' => 'Itemtypes', 'action' => 'view', $quoteproduct->itemtype->id]) : '' ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Reveal') ?></b></h5>
                                    <p><?= $quoteproduct->has('reveal') ? $this->Html->link($quoteproduct->reveal->type, ['controller' => 'Reveals', 'action' => 'view', $quoteproduct->reveal->id]) : '' ?></p>
                                </div>
                                  
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Height') ?></b></h5>
                                    <p><?= $this->Number->format($quoteproduct->height,['after' => ' mm']) ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="subheader"><b><?= __('Width') ?></b></h5>
                                    <p><?= $this->Number->format($quoteproduct->width,['after' => ' mm']) ?></p>
                                </div>
                                <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Area') ?></b></h5>
                                <p><?= $quoteproduct->width*$quoteproduct->height.' mm2' ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Related ID </div>
                    <div class="panel-body">
                        <div class= "row">
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Quote') ?></b></h5>
                                <p><?= $quoteproduct->has('quote') ? $this->Html->link($quoteproduct->quote->id, ['controller' => 'Quotes', 'action' => 'view', $quoteproduct->quote->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Balrating') ?></b></h5>
                                <p><?= $quoteproduct->has('balrating') ? $this->Html->link($quoteproduct->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $quoteproduct->balrating->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Itemtype') ?></b></h5>
                                <p><?= $quoteproduct->has('itemtype') ? $this->Html->link($quoteproduct->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $quoteproduct->itemtype->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Design') ?></b></h5>
                                <p><?= $quoteproduct->has('design') ? $this->Html->link($quoteproduct->design->id, ['controller' => 'Designs', 'action' => 'view', $quoteproduct->design->id]) : '' ?></p>
                            </div>
                        </div>
                        <div class= "row">
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Reveal') ?></b></h5>
                                <p><?= $quoteproduct->has('reveal') ? $this->Html->link($quoteproduct->reveal->id, ['controller' => 'Reveals', 'action' => 'view', $quoteproduct->reveal->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-4">
                                <h5 class="subheader"><b><?= __('Flyscreenmesh') ?></b></h5>
                                <p><?= $quoteproduct->has('flyscreenmesh') ? $this->Html->link($quoteproduct->flyscreenmesh->id, ['controller' => 'Flyscreenmeshes', 'action' => 'view', $quoteproduct->flyscreenmesh->id]) : '' ?></p>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="subheader"><b><?= __('Glazing') ?></b></h5>
                                <p><?= $quoteproduct->has('glazing') ? $this->Html->link($quoteproduct->glazing->id, ['controller' => 'Glazings', 'action' => 'view', $quoteproduct->glazing->id]) : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Date</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="subheader"><b><?= __('Created') ?></b></h5>
                            <p><?= h($quoteproduct->created) ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
                            <p><?= h($quoteproduct->modified) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions</div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quoteproduct->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $quoteproduct->id)]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quoteproduct->id], ['class' => 'btn btn-success btn-xs']) ?>
                        <span class="pull-right text-muted small"><em>Are you sure?</em>
                        </span>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>