<x-app-layout>
    <section class="container min-vh-100 py-5">
        <div class="row row-cols-1 row-cols-lg-2 g-5 align-items-start"
            style="padding-top: 6rem; padding-bottom: 3rem">

            <!-- COVER -->
            <div class="col text-center">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <img class="img-fluid rounded-4 mx-auto"
                        style="max-width: 70%"
                        src="{{ $book->cover_url }}"
                        alt="{{ $book->title }}" />
                    
                </div>
            </div>

            <!-- DETAIL -->
            <div class="col">
                <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                    <h1 class="fw-bold mb-0">
                        {{ $book->title }} ({{ $book->publish_year }})
                    </h1>

                    <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2">
                        {{ $book->category }}
                    </span>
                </div>

                <p class="fs-6 text-muted mb-2">
                    ✍️ Penulis:
                    <span class="fw-semibold text-dark">
                        {{ $book->writer }}
                    </span>
                </p>

                <p class="fs-6 text-muted mb-4">
                    📦 Stok tersedia:
                    <span class="fw-semibold text-success">
                        {{ $book->amount }} buku
                    </span>
                </p>

                <div class="card border-0 bg-body-tertiary rounded-4 p-4 mb-5">
                    <h5 class="fw-bold text-success mb-3">
                        📖 Sinopsis
                    </h5>
                    <div class="text-muted">
                        {!! $book->synopsis !!}
                    </div>
                </div>
                <!-- ACTION -->
                @if (auth()->check())
                    <form class="my-4"
                        action="{{ route('my-books.store', $book) }}"
                        method="POST">
                        @csrf
                        @method('POST')

                        <div class="row row-cols-1 row-cols-lg-2 g-3 mb-4">
                            <div>
                                <label for="duration"
                                    class="form-label fw-semibold text-success">
                                    Durasi
                                </label>
                                <div class="input-group">
                                    <input type="number"
                                        class="form-control rounded-start-3"
                                        name="duration"
                                        value="{{ old('duration') }}">
                                    <span class="input-group-text rounded-end-3">
                                        hari
                                    </span>
                                </div>
                                @error('duration')
                                    <span class="text-danger small">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <label for="amount"
                                    class="form-label fw-semibold text-success">
                                    Jumlah Buku (maks: {{ $book->amount }} buku)
                                </label>
                                <div class="input-group">
                                    <input type="number"
                                        class="form-control rounded-start-3"
                                        name="amount"
                                        value="{{ old('amount') }}">
                                    <span class="input-group-text rounded-end-3">
                                        buku
                                    </span>
                                </div>
                                @error('amount')
                                    <span class="text-danger small">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if (session('error'))
                        <div class="alert alert-danger mt-3 text-center fw-semibold">
                            {{ session('error') }}
                        </div>
                        @endif

                        <button type="submit"
                            class="btn btn-success btn-lg rounded-pill px-5 shadow-sm d-block mx-auto">
                            📚 Pinjam Buku
                        </button>

                    </form>
                @elseif ($book->amount > 0)
                    <button type="button"
                        class="btn btn-outline-secondary btn-lg rounded-pill px-5 my-5 d-block mx-auto"
                        disabled>
                        🔒 Login untuk meminjam buku
                    </button>
                @else
                    <button type="button"
                        class="btn btn-outline-danger btn-lg rounded-pill px-5 my-5 d-block mx-auto"
                        disabled>
                        ❌ Buku tidak tersedia
                    </button>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
