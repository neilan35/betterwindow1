
            </br>
            <div class="well well-sm">
                <div class="page-header">
                <h1><b style="color:black;"><?= $profile->employee->first_name.' '.$profile->employee->last_name.' Dashboard'?></b><small><?='  '.$Role?></small> 

                <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> View Profile', array('controller'=>'Users','action'=>'view', $profile->id), array('escape' => false, 'class' => 'btn btn-primary btn-md pull-right', 'target' => '_self'));?>
                </h1>
                </div>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $userCount; ?></div>
                                    <div>Users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">
                                    <?php 
                                    echo $this->Html->link('<span><b>View Details</b></span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $empCount; ?></div>
                                    <div>Employees!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php 
                                 echo $this->Html->link('<span><b>View Details</b></span>', ['controller' => 'Employees', 'action' => 'index'], ['escape' => false]); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-child fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $custCount; ?></div>
                                    <div>Customers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $this->Html->link('<span><b>View Details</b></span>', ['controller' => 'Customers', 'action' => 'index'], ['escape' => false]); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $quotesCount; ?></div>
                                    <div>Quotes</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php 
                            echo $this->Html->link('<span><b>View Details</b></span>', ['controller' => 'Quotes', 'action' => 'index'], ['escape' => false]); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- row 1 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $enquirCount; ?></div>
                                    <div>Enquiries!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">
                                    <?php 
                                    echo $this->Html->link('<span><b>View Details</b></span>', ['controller' => 'Enquiries', 'action' => 'index'], ['escape' => false]); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>



                </div>
            </div>