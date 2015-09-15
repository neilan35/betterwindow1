<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($user->id) ?></p>
                        <h4 class="subheader"><?= __('Email') ?></h4>
                        <p><?= h($user->email) ?></p>
                        <h4 class="subheader"><?= __('Password') ?></h4>
                        <p><?= h($user->password) ?></p>
                        <h4 class="subheader"><?= __('Customer') ?></h4>
                        <p><?= $user->has('customer') ? $this->Html->link($user->customer->id, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Employee') ?></h4>
                        <p><?= $user->has('employee') ? $this->Html->link($user->employee->id, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($user->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($user->modified) ?></p>
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
   </div>
</div>