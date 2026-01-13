<x-guest-layout title="Login">
    <div class="text-center mb-4">
        
        <a href="{{ route('home') }}"
            class="fw-bold fs-1 text-decoration-none text-success">
            Perpustakaan UNIBA Madura
        </a>
        <p class="text-muted mt-2">
            Masuk untuk mulai membaca dan meminjam buku
        </p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4 w-100"
        style="max-width: 500px">
        <h3 class="text-center fw-bold text-success mb-4">
            Login
        </h3>

        <form action="{{ route('login') }}" method="POST"
            class="d-flex flex-column gap-4 text-start">
            @csrf
            @method('POST')

            <div>
                <label for="number"
                    class="form-label fw-semibold text-success">
                    Nomor
                </label>
                <input type="number" name="number"
                    class="form-control rounded-3"
                    id="number"
                    value="{{ old('number') }}"
                    placeholder="Masukkan nomor pengguna" />
                @error('number')
                    <small class="fs-6 text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div>
                <label for="password"
                    class="form-label fw-semibold text-success">
                    Password
                </label>
                <input type="password" name="password"
                    class="form-control rounded-3"
                    id="password"
                    placeholder="Masukkan password" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember">
                    <label class="form-check-label"
                        for="remember">
                        Ingat saya
                    </label>
                </div>
            </div>

            <div class="d-grid mt-2">
                <button type="submit"
                    class="btn btn-success rounded-pill py-2 shadow-sm">
                    <span class="fs-5">Login</span>
                </button>
            </div>

            <div class="text-center mt-3">
                <span class="text-muted">
                    Belum punya akun?
                </span>
                <a href="{{ route('register') }}"
                    class="fw-semibold text-success text-decoration-none">
                    Daftar
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
