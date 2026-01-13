<div class="fixed-top">

    @auth
        @if (in_array(auth()->user()->role, [\App\Models\User::ROLES['Admin'], \App\Models\User::ROLES['Librarian']]))
            <div class="bg-success text-white px-4 py-2 d-flex justify-content-between align-items-center shadow-sm">
                <span class="small">
                    Login sebagai <b>{{ auth()->user()->role }}</b>
                </span>

                <a href="{{ route('admin.dashboard') }}"
                    class="btn btn-light btn-sm fw-semibold rounded-pill">
                    Dashboard {{ auth()->user()->role }}
                </a>
            </div>
        @endif
    @endauth

    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-3">
        <div class="container-fluid">

            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo_uniba.jpg') }}" alt="Logo Perpustakaan" height="40"class="rounded shadow-sm">
                <span class="fw-bold text-success">Perpustakaan UNIBA Madura</span>
            </a>
            <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarItems">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarItems">
                <div class="navbar-nav ms-auto align-items-lg-center gap-2">

                    @auth
                        <a class="nav-link fw-semibold {{ request()->routeIs('my-books.*') ? 'text-success' : '' }}"
                            href="{{ route('my-books.index') }}">
                            Buku-ku
                        </a>

                        <form action="{{ route('logout') }}" method="POST"
                            onsubmit="return confirm('Anda yakin ingin keluar?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-success btn-sm rounded-pill px-3"
                                type="submit">
                                Logout
                            </button>
                        </form>
                    @endauth

                    @guest
                        <a class="nav-link fw-semibold" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-success btn-sm rounded-pill px-3"
                            href="{{ route('register') }}">
                            Register
                        </a>
                    @endguest

                </div>
            </div>
        </div>
    </nav>

</div>
