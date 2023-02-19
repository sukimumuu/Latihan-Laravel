<!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <i class="fas fa-book fa-2x text-gray-300"></i>
                    <div class="sidebar-brand-text mx-3">Ussbrary</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cp.index') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('crud-index') }}">
                        <i class="fas fa-fw fa-laptop"></i>
                        <span>Data Buku</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('writer.index') }}">
                        <i class="fas fa-fw fa-laptop"></i>
                        <span>Data Penulis</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">
                        <i class="fas fa-fw fa-laptop"></i>
                        <span>Kategori</span></a>
                </li>
            </ul>
            <!-- End of Sidebar -->
