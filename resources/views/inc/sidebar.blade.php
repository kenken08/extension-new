<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="/images/logo/cmu.png" alt="" srcset="" width="50" height="50">
        </div>
        <div class="sidebar-brand-text">Extension Office</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">General</div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span>
            </a>
        </li>
    
        <!-- Nav Item - Announcements -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('announcements') }}">
                <i class="fas fa-fw fa-info-circle"></i>
                <span>Announcements</span>
            </a>
        </li>

        <!-- Nav Item - Gallery -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('gallery') }}">
                <i class="fas fa-fw fa-images"></i>
                <span>Gallery</span>
            </a>
        </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Sections</div>

    <!-- Nav Item - Announcements -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('projects') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Projects</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Evaluations</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Evaluation Summary:</h6>
            <a class="collapse-item" href="{{ route('training.summary') }}">Training Summary</a>
            <a class="collapse-item" href="{{ route('resource.summary') }}">Resource Summary</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->