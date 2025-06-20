<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <span class="brand-text font-weight-light">Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Menus</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Analytics
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('/management') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/voters') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Voters</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/results') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Results</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/candidates') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Candidates</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/elections') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Elections
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
