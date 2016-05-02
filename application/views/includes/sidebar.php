<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Riky Sutriadi</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addUser') ?>"><i class="fa fa-plus-circle"></i> Add User</a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getUser') ?>"><i class="fa fa-circle-o"></i> All user</a></li>
                </ul>
            </li>
            <li>
              <a href="<?php echo site_url('C_dashboard/mail') ?>">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Article</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addArticle') ?>"><i class="fa fa-plus-circle"></i> Add Article</a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getArticle') ?>"><i class="fa fa-circle-o"></i> All Article</a></li>
                </ul>
            </li>        
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Testimoni</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addTestimoni') ?>"><i class="fa fa-plus-circle"></i> Add Testimoni</a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getTestimoni') ?>"><i class="fa fa-circle-o"></i> All Testimoni</a></li>
                </ul>
            </li>  
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-picture"></i>
                    <span>Gallery</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addGallery') ?>"><i class="fa fa-plus-circle"></i> Add photo</a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getGallery') ?>"><i class="fa fa-circle-o"></i> All photo</a></li>
                </ul>
            </li>      
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-facetime-video"></i>
                    <span>Video</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addVideo') ?>"><i class="fa fa-plus-circle"></i> Add video</a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getVideo') ?>"><i class="fa fa-circle-o"></i> All video</a></li>
                </ul>
            </li>      
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-paperclip"></i>
                    <span>Program </span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('C_dashboard/addProgram') ?>"><i class="fa fa-plus-circle"></i> Add program </a></li>
                    <li><a href="<?php echo site_url('C_dashboard/getProgram') ?>"><i class="fa fa-circle-o"></i> All program </a></li>
                </ul>
            </li> 
            <li>
              <a href="<?php echo site_url('C_dashboard') ?>">
                <i class="glyphicon glyphicon-log-out"></i> <span>Logout</span>
              </a>
            </li>       
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">