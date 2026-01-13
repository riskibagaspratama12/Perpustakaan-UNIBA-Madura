<x-app-layout>
    <!-- Search Header -->
    <section
        class="d-flex flex-column justify-content-center align-items-center text-center mt-5 py-5 px-4 bg-success-subtle rounded-4 mx-3">
        <h1 class="fw-bold mb-2">Hasil Pencarian</h1>
        <p class="text-muted mb-4">
            Temukan buku favoritmu 📖
        </p>

        <form action="{{ route('search') }}" method="GET"
            class="position-relative d-flex w-100"
            style="max-width: 650px">
            <input type="text" name="search"
                class="form-control form-control-lg rounded-pill pe-5"
                placeholder="Cari judul atau penulis..."
                value="{{ request()->query('search') }}" />

            <button type="submit"
                class="btn position-absolute top-50 end-0 translate-middle-y me-2">
                <svg class="text-success" width="20" height="20" fill="currentColor"
                    viewBox="0 0 18 18">
                    <path
                        d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 19.585938 21.585938 C 20.137937 22.137937 21.033938 22.137938 21.585938 21.585938 C 22.137938 21.033938 22.137938 20.137938 21.585938 19.585938 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z">
                    </path>
                </svg>
            </button>
        </form>
    </section>

    <!-- Result List -->
    <section class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($books as $book)
                <a href="{{ route('preview', $book) }}"
                    class="col text-decoration-none text-dark">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <img
                            src="{{ isset($book->cover) ? asset('storage/' . $book->cover) : asset('storage/placeholder.png') }}"
                            alt="{{ $book->title }}"
                            class="card-img-top">

                        <div class="card-body text-center p-4">
                            <h3 class="fs-5 fw-semibold mb-3">
                                {{ $book->title }}
                            </h3>

                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                                {{ $book->writer }}
                            </span>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col">
                    <div class="text-center py-5">
                        <h4 class="fw-semibold text-muted">
                            😕 Buku tidak ditemukan
                        </h4>
                        <p class="text-muted">
                            Coba kata kunci lain ya
                        </p>
                    </div>
                </div>
            @endforelse
        </div>

        @if ($books->isNotEmpty())
            <div class="mt-5 d-flex justify-content-center">
                {{ $books->withQueryString()->links() }}
            </div>
        @endif
    </section>
</x-app-layout>
