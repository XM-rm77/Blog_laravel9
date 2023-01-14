<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> {{ Auth::user()->name }}
        </p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->

    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->

      @if (Auth::user()->role == "admin")
      <li class="active"><a href="{{route('category.index')}}">
          <i class="fa fa-link"></i> <span>Categories</span></a>
      </li>
      @endif

      <li class="active"><a href="/notifications">
          <i class="fa fa-bell"></i> <span>Notifications</span></a>
      </li>

      @if (Auth::user()->role == "admin")
      <li class="active"><a href="{{route('post.index')}}">
          <i class="fa fa-link"></i> <span>Posts</span></a>
      </li>
      @else
      <li class="active"><a href="/posts">
          <i class="fa fa-link"></i> <span>Posts</span></a>
      </li>
      @endif
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>