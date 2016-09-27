<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand" href="#page-top">Easy Access</a> -->
                <?php echo anchor('account/index','Easy Access','class="navbar-brand"'); ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Clearance</a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Inventory</a>
                    </li>
                   <!--  <li class="page-scroll">
                        <?php echo anchor('labhead/sUser','Manage Staff')?>
                    </li> -->
                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Users<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                         <li><?php echo anchor('labhead/sUser','Manage Staff')?></li>
                           <li><?php echo anchor('labhead/aUser','Add Staff')?><li>
                          </ul>
                        </li>
                      <li class="page-scroll">
                        <a href="">Manage Laboratory</a>
                    </li>
                    <li class="page-scroll">
                        <a href="">Manage Violation</a>
                    </li>
                    <li class="page-scroll">
               <!--  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> -->
                  <a data-toggle="modal" data-target="#myModal" href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Logout</h4>
      </div>
      <div class="modal-body">
       Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <?php echo anchor(base_url().'index.php/account/logout', '<button type="button" class="btn btn-primary">Hell yeah</button>');?>
      </div>
    </div>
  </div>
</div>