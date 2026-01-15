<x-app-layout>
    <section class="mt-5 py-5">
        <!-- ALERT -->
        @if ($message = session()->get('success'))
            <div class="container mb-4">
                <div class="alert alert-success rounded-4 shadow-sm">
                    {{ $message }}
                </div>
            </div>
        @endif

        @error('default')
            <div class="container mb-4">
                <div class="alert alert-danger rounded-4 shadow-sm">
                    {{ $message }}
                </div>
            </div>
        @enderror

        <!-- CURRENT BORROWS -->
        <div class="container mb-4">
            <h2 class="fs-4 fw-bold text-success mb-1">
                📚 Sedang Dipinjam
            </h2>
            <p class="text-muted mb-4">
                Buku yang saat ini masih dalam masa peminjaman
            </p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($currentBorrows as $currentBorrow)
                    <a href="{{ route('preview', $currentBorrow->book) }}"
                        class="col text-dark text-decoration-none">
                        <div
                            class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                            <!-- STATUS -->
                            <div
                                class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center small">
                                @if (!$currentBorrow->confirmation)
                                    <span class="badge bg-warning-subtle text-warning rounded-pill">
                                        Menunggu Konfirmasi
                                    </span>
                                @else
                                    @switch($currentBorrow->restore?->status)
                                        @case(\App\Models\Restore::STATUSES['Not confirmed'])
                                        @case(\App\Models\Restore::STATUSES['Past due'])
                                            <span class="badge bg-secondary-subtle text-secondary rounded-pill">
                                                Proses Pengembalian
                                            </span>
                                        @break

                                        @case(\App\Models\Restore::STATUSES['Fine not paid'])
                                            <span class="badge bg-danger-subtle text-danger rounded-pill">
                                                Denda Rp
                                                {{ number_format($currentBorrow->restore->fine, 0, ',', '.') }}
                                            </span>
                                        @break

                                        @default
                                            <span class="badge bg-success-subtle text-success rounded-pill">
                                                Aktif
                                            </span>

                                            <form
                                                action="{{ route('my-books.update', $currentBorrow) }}"
                                                method="POST"
                                                onsubmit="return confirm('Anda yakin ingin mengembalikan buku ini?')">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="btn btn-sm btn-outline-success rounded-pill">
                                                    Kembalikan
                                                </button>
                                            </form>
                                    @endswitch
                                @endif
                            </div>

                            <!-- COVER -->
                            <img src="{{ $currentBorrow->book->cover_url }}"
                                alt="{{ $currentBorrow->book->title }}"
                                class="card-img-top">
                            

                            <!-- BODY -->
                            <div class="card-body text-center">
                                <h3 class="fs-5 fw-bold mb-3">
                                    {{ $currentBorrow->book->title }}
                                </h3>

                                <span class="fs-6 text-muted">
                                    Tenggat
                                    @php
                                        $due = $currentBorrow->borrowed_at->addDays($currentBorrow->duration);
                                    @endphp
                                    <span
                                        class="fw-bold text-decoration-underline text-{{ $due > now() ? 'success' : 'danger' }}">
                                        {{ $due->locale('id_ID')->diffForHumans() }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $currentBorrows->links() }}
            </div>
        </div>
    </section>

    <!-- HISTORY -->
    <section class="py-5 bg-body-tertiary">
        <div class="container">
            <h2 class="fs-4 fw-bold text-success mb-1">
                ⏱️ Riwayat Peminjaman
            </h2>
            <p class="text-muted mb-4">
                Buku yang pernah Anda pinjam sebelumnya
            </p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($recentBorrows as $recentBorrow)
                    <a href="{{ route('preview', $recentBorrow->book) }}"
                        class="col text-dark text-decoration-none">
                        <div
                            class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                            <img src="{{ $recentBorrow->book->cover_url }}"
                                alt="{{ $recentBorrow->book->title }}"
                                class="card-img-top">
                            

                            <div class="card-body text-center">
                                <h3 class="fs-5 fw-bold mb-3">
                                    {{ $recentBorrow->book->title }}
                                </h3>

                                <span class="fs-6 text-muted">
                                    Dipinjam pada
                                    <span class="fw-bold text-decoration-underline">
                                        {{ $recentBorrow->restore->returned_at->locale('id_ID')->isoFormat('LL') }}
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
