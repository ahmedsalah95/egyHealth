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
                        <li><a href="{{url('/')}}/main"><i class="fa fa-circle-o"></i>logo and title </a></li>
                        <li><a href="{{url('/')}}/addSponsor"><i class="fa fa-circle-o"></i>Add Sponsor</a></li>
                        <li><a href="{{url('/')}}/sponsors"><i class="fa fa-circle-o"></i>normal Sponsors</a></li>
                        <li><a href="{{url('/')}}/dentalSponsors"><i class="fa fa-circle-o"></i>dental Sponsors</a></li>
                        <li><a href="{{url('/')}}/notifications"><i class="fa fa-circle-o"></i>show all
                                sent notifications</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-address-card"></i> <span>Places</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{url('/')}}/places">
                                <i class="fa fa-circle-o"></i>
                                Assigned Places
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}/addplace">
                                <i class="fa fa-circle-o"></i>
                                Add Place To Sponsor
                            </a>
                        </li>                        
                    </ul>
                </li>
            </ul>
        @endif
    </section>
    <!-- /.sidebar -->
</aside>