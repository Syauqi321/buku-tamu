<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Buku tamu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    @can('role',['Super Admin'])
    <li class="nav-item">
        <a class="nav-link" href="{{route('data-admin.index')}}">
            <i class="fa fa-user-circle"></i>
            <span>Menu Admin</span></a>
    </li>
    @endcan

    @can('role',['Super Admin','Admin'])
    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-users"></i>
            <span>Menu Beranda</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu Utama</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Menu</h6>
                <a class="collapse-item" href="{{route('admin-tamu')}}">Pengunjung</a>
                <a class="collapse-item" href="{{route('education.index')}}">Pendidikan</a>
                <a class="collapse-item" href="{{route('job.index')}}">Pekerjaan</a>
            </div>
    </li>



    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2"
            src="{{ asset('pengguna/assets/images/sdlogo.png') }}"
            alt="...">
        <p class="text-center mb-2"><strong style="text-align: center">SDN 1 Sumbersewu</strong><br></p>
        <a class="btn btn-success btn-sm" href="https://sdn1sumbersewu.sch.id/">Kunjungi Website Sekolah Kami</a>
    </div>
</ul>
@endcan
