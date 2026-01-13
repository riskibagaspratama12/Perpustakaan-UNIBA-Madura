<x-app-layout>
    <!-- HERO -->
    <section class="d-flex flex-column justify-content-center align-items-center text-center py-5 px-4">
        <span class="badge bg-success-subtle text-success rounded-pill px-4 py-2 mb-3 mt-3 shadow-sm">
            Perpustakaan UNIBA Madura
        </span>

        <h1 class="fs-2 fw-bold text-success mt-2">
            Baca, Pinjam, dan Jelajahi Buku Favoritmu
        </h1>

        <p class="text-muted mt-3 mb-4" style="max-width: 560px">
            Akses koleksi buku populer dan terbaru secara online dengan tampilan modern dan mudah digunakan.
        </p>

        <form action="{{ route('search') }}" method="GET"
            class="position-relative d-flex w-100 shadow-sm rounded-pill overflow-hidden bg-white"
            style="max-width: 640px">
            <input type="text" name="search"
                class="form-control border-0 px-4 py-3 rounded-pill"
                placeholder="Cari judul buku, penulis, atau kategori..." />

            <button type="submit"
                class="btn btn-success rounded-pill px-4 position-absolute end-0 top-0 bottom-0">
                Cari
            </button>
        </form>
    </section>

    <!-- POPULER -->
    <section class="py-5 bg-body-tertiary">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h2 class="fs-4 fw-bold text-success mb-1">
                        🔥 Buku Paling Populer
                    </h2>
                    <span class="text-muted small">
                        Paling sering dipinjam oleh pembaca
                    </span>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($popularBooks as $popularBook)
                    <a href="{{ route('preview', $popularBook) }}"
                        class="col text-dark text-decoration-none">
                        <div
                            class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden transition">
                            <div class="position-relative">
                                <img src="{{ isset($popularBook->cover) ? asset('storage/' . $popularBook->cover) : asset('storage/placeholder.png') }}"
                                    alt="{{ $popularBook->title }}"
                                    class="card-img-top max-h-15">

                                <span
                                    class="badge bg-success position-absolute top-0 start-0 m-3 rounded-pill shadow-sm">
                                    Populer
                                </span>
                            </div>

                            <div class="card-body text-center">
                                <h3 class="fs-5 fw-bold mb-3">
                                    {{ $popularBook->title }}
                                </h3>

                                <span class="fs-6 text-muted">
                                    Dipinjam
                                    <span
                                        class="fw-bold text-success text-decoration-underline">
                                        {{ $popularBook->borrows_count }}
                                    </span>
                                    kali
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TERBARU -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div>
                    <h2 class="fs-4 fw-bold text-success mb-1">
                        ✨ Buku Terbaru
                    </h2>
                    <span class="text-muted small">
                        Koleksi yang baru saja ditambahkan
                    </span>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($newestBooks as $newestBook)
                    <a href="{{ route('preview', $newestBook) }}"
                        class="col text-dark text-decoration-none">
                        <div
                            class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                            <img src="{{ !empty($newestBook->cover)
                                    ? asset('storage/' . $newestBook->cover)
                                    : asset('storage/placeholder.png') }}"
                                 alt="{{ $newestBook->title }}"
                                 class="card-img-top">

                            <div class="card-body text-center">
                                <h3 class="fs-5 fw-bold mb-3">
                                    {{ $newestBook->title }}
                                </h3>

                                <span class="fs-6 text-muted">
                                    Terbit
                                    <span
                                        class="fw-bold text-success text-decoration-underline">
                                        {{ $newestBook->created_at->locale('id_ID')->diffForHumans() }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
