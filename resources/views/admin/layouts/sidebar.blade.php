<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Zeeshan Riaz</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li> 
        
        <li><a href="{{ route('post.index') }}"><i class="fa fa-circle-o text-red"></i> <span>Post</span></a></li>
        <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Category</span></a></li>
        <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Tags</span></a></li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Users</span></a></li>
        <li><a href="{{ route('role.index') }}"><i class="fa fa-circle-o text-aqua"></i> <span>User Role</span></a></li>
        <li><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Permission</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>