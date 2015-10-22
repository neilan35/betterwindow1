

</div>
 
  <script>
<?=$this->Html->addCrumb('Users', '/users');?>
<?= $this->Html->addCrumb('View');?>

</script>
 <div class="row">
    <div class="container-fluid well span6">
        <div class="row-fluid">
        
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading"> User Information </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-2">
                                <h5 class="subheader"><b><?= __('Id') ?></b></h5>
                                <p><?= $this->Number->format($user->id) ?></p>
                                </div>
                                <div class="col-sm-2">
                                <h5 class="subheader"><b><?= __('Email') ?></b></h5>
                                <p><?= h($user->email) ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
      
    
        <div class="col-sm-3">
        <div class="panel panel-primary">
         <div class="panel-heading"> Related ID </div>
         <div class="panel-body">
             <h5 class="subheader">
             <?php if ($user->has('customer')) {
                echo "<b> Customer ID </b>";
            } 
            else 
             echo "<b> Employee ID </b>"; ?></h5>

             <p><?php if ($user->has('customer')) {
                echo $this->Html->link($user->customer->id, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]);
            } 
            else   
                echo $this->Html->link($user->employee->id, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]);
            ?></p>
         </div>
        </div>
        </div>
        
        <div class="col-sm-4">
        <div class="panel panel-primary">
         <div class="panel-heading">Date</div>
         <div class="panel-body">
         <div class="row">
                <div class="col-sm-6">
                <h5 class="subheader"><b><?= __('Created') ?></b></h5>
                <p><?= h($user->created) ?></p>
                </div>
                <div class="col-sm-6">
                <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
                <p><?= h($user->modified) ?></p>
            </div>
         </div>
        </div>
        </div>
        </div>
        </div>
        </div>

    
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                               <div class="list-group-item">
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-xs', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-success btn-xs']) ?>
                                    <span class="pull-right text-muted small"><em>Are you sure?</em>
                                    </span>
                                </div>


                                                                                                   
                            </div>
                            <!-- /.list-group -->
                            <!-- <a href="#" class="btn btn-default btn-block">View All Alerts</a> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel .chat-panel -->
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
