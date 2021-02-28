<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuVYlKQST-Or1-SvQPgCkwP9KhYDERIaLopQ&usqp=CAU " class="img-circle" alt="User Image"  width="100" height="80">
                    </div>
                    <div class="pull-left info">
                        <p>{{ session('USER')->name_user }}</p>
                        <i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>
            <li><a href="{{route('propietario.index')}}"><i class="fa fa-circle-o text-green"></i> <span>Propietarios</span></a></li>
            <li><a href="{{route('conductor.index')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Conductores</span></a></li>
            <li><a href="{{route('vehiculo.index')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Vehículos</span></a></li>
            <li><a href="{{route('login.logout')}}"><i class="fa fa-circle-o text-red"></i> <span>Sign out</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
