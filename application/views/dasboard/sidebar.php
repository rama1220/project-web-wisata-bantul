<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/images/tugu.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hai Admin!</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <li><a href="<?=site_url('Dashboards')?>">
            <i class="fa fa-home" aria-hidden="true"></i> <span>Home</span>
          </a>
        </li>
        <li class="active treeview">
          <li><a href="<?=site_url('Kategori')?>">
             <i class="fa fa-book"></i><span>Kategori Pariwisata</span>
          </a>
        </li>
        <li class="active treeview">
          <li><a href="<?=site_url('Artikel')?>">
            <i class="fa fa-pencil" aria-hidden="true"></i> <span>Tulis Artikel</span>
          </a>
        </li>
        <li class="active treeview">
          <li><a href="<?=site_url('about')?>">
           <i class="fa fa-area-chart" aria-hidden="true"></i> <span>About</span>
          </a>
        </li>
         <li class="active treeview">
          <li><a href="<?=site_url('Comment')?>">
            <i class="fa fa-comments" aria-hidden="true"></i> <span>Comment</span>
          </a>
        </li>
        <li class="active treeview">
          <li><a href="<?=site_url('Admin')?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Admin</span>
          </a>
        </li>
        <li class="header">CLOSING</li> 
        <li>
        <a href="<?=site_url('Login/logout')?>">
          <i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>