<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        @if(auth()->user())
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/')}}/users"><i class="fa fa-circle-o"></i> show users</a></li>

                </ul>
            </li>

        </ul>
        @endif
    </section>
    <!-- /.sidebar -->
</aside>