<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Marvel</div>
        {{--            <div class="sidebar-brand-icon">--}}
        {{--                <img src="{{ asset("admin/img/logo/logo2.png") }}">--}}
        {{--            </div>--}}

    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Submissions</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Forms</h6>
                <a class="collapse-item" href="{{ url('admin/submissions') }}">Submissions</a>
                <a class="collapse-item" href="{{ url('admin/draw') }}">Draw</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Settings
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Users</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Management</h6>
                <a class="collapse-item" href="{{ url('admin/users') }}">All Users</a>
                <a class="collapse-item" href="register.html">Roles</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
