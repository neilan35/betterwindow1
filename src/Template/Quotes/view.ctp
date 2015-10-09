<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Quotes
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($quote->id) ?></p>
                        <h4 class="subheader"><?= __('Customer') ?></h4>
                        <p><?= $quote->has('customer') ? $this->Html->link($quote->customer->first_name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Quoteno') ?></h4>
                        <p><?= h($quote->quoteno) ?></p>
                        <h4 class="subheader"><?= __('Item') ?></h4>
                        <p><?= h($quote->item) ?></p>
                        <h4 class="subheader"><?= __('Installtype') ?></h4>
                        <p><?= h($quote->installtype) ?></p>
                        <h4 class="subheader"><?= __('Deliverytype') ?></h4>
                        <p><?= h($quote->deliverytype) ?></p>
                        <h4 class="subheader"><?= __('Status') ?></h4>
                        <p><?= h($quote->status) ?></p>
                        <h4 class="subheader"><?= __('Unitcost') ?></h4>
                        <p><?= $this->Number->format($quote->unitcost) ?></p>
                        <h4 class="subheader"><?= __('Quantity') ?></h4>
                        <p><?= $this->Number->format($quote->quantity) ?></p>
                        <h4 class="subheader"><?= __('Installation') ?></h4>
                        <p><?= $quote->installation ? __('Yes') : __('No'); ?></p>
                        <h4 class="subheader"><?= __('Delivery') ?></h4>
                        <p><?= $quote->delivery ? __('Yes') : __('No'); ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($quote->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($quote->modified) ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>
<div class="related row">
   <div class="table-responsive">
                <h4 class="subheader"><?= __('Related Quoteproducts') ?></h4>
                <?php if (!empty($quote->quoteproducts)): ?>
                <table class="table table-hover" id="tableIndex">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Quote Id') ?></th>
                        <th><?= __('Colour Id') ?></th>
                        <th><?= __('Balrating Id') ?></th>
                        <th><?= __('Itemtype Id') ?></th>
                        <th><?= __('Design Id') ?></th>
                        <th><?= __('Reveal Id') ?></th>
                        <th><?= __('Flyscreenmesh Id') ?></th>
                        <th><?= __('Glazing Id') ?></th>
                        <th><?= __('Height') ?></th>
                        <th><?= __('Width') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($quote->quoteproducts as $quoteproducts): ?>
                    <tr>
                        <td><?= h($quoteproducts->id) ?></td>
                        <td><?= h($quoteproducts->quote_id) ?></td>
                        <td><?= h($quoteproducts->colour_id) ?></td>
                        <td><?= h($quoteproducts->balrating_id) ?></td>
                        <td><?= h($quoteproducts->itemtype_id) ?></td>
                        <td><?= h($quoteproducts->design_id) ?></td>
                        <td><?= h($quoteproducts->reveal_id) ?></td>
                        <td><?= h($quoteproducts->flyscreenmesh_id) ?></td>
                        <td><?= h($quoteproducts->glazing_id) ?></td>
                        <td><?= h($quoteproducts->height) ?></td>
                        <td><?= h($quoteproducts->width) ?></td>
                        <td><?= h($quoteproducts->created) ?></td>
                        <td><?= h($quoteproducts->modified) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Quoteproducts', 'action' => 'view', $quoteproducts->id], ['class' => 'btn btn-info btn-xs']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Quoteproducts', 'action' => 'edit', $quoteproducts->id], ['class' => 'btn btn-success btn-xs']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quoteproducts', 'action' => 'delete', $quoteproducts->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $quoteproducts->id)]) ?>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
