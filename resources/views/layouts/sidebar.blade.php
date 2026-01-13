<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">


    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-4"
        href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-book-open fs-4 text-white"></i>
        </div>
        <div class="sidebar-brand-text mx-3 fw-bold text-white">
            Perpustakaan<br>
            <small class="fw-normal">UNIBA Madura</small>
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
            href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    @if (auth()->user()->role === \App\Models\User::ROLES['Admin'])
        <li class="nav-item {{ request()->routeIs('admin.librarians.*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
                href="{{ route('admin.librarians.index') }}">
                <i class="fas fa-fw fa-user-shield"></i>
                <span>Pustakawan</span>
            </a>
        </li>
    @endif

    @if (auth()->user()->role === \App\Models\User::ROLES['Librarian'])
        <li class="nav-item {{ request()->routeIs('admin.members.*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
                href="{{ route('admin.members.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Member</span>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.books.*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
                href="{{ route('admin.books.index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Buku</span>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.borrows.*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
                href="{{ route('admin.borrows.index') }}">
                <i class="fas fa-fw fa-copy"></i>
                <span>Peminjaman</span>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.returns.*') ? 'active' : '' }}">
            <a class="nav-link d-flex align-items-center gap-2 fw-semibold"
                href="{{ route('admin.returns.index') }}">
                <i class="fas fa-fw fa-undo"></i>
                <span>Pengembalian</span>
            </a>
        </li>
    @endif

    <div class="mt-auto text-center py-4 d-none d-md-inline">
        <button class="rounded-circle border-0 bg-success text-white"
            id="sidebarToggle"></button>
    </div>

</ul>
