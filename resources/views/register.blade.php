<x-guest-layout title="Register">
    <div class="text-center mb-4">
        <a href="{{ route('home') }}"
            class="fw-bold fs-1 text-decoration-none text-success">
            Perpustakaan UNIBA Madura 
        </a>
        <p class="text-muted mt-2">
            Daftar dan mulai petualangan membaca 📚
        </p>
    </div>

    <div class="card border-0 shadow-lg rounded-4 p-4 w-100"
        style="max-width: 550px">
        <h3 class="text-center fw-semibold mb-4">Register</h3>

        <form action="{{ route('register') }}" method="POST"
            class="d-flex flex-column gap-3">
            @csrf
            @method('POST')

            <!-- Nama -->
            <div>
                <label class="form-label">Nama</label>
                <input type="text" name="name"
                    class="form-control form-control-lg rounded-3" placeholder
                    value="{{ old('name') }}" />
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Tipe Nomor -->
            <div>
                <label class="form-label">Tipe Nomor</label>
                <select name="number_type"
                    class="form-select form-select-lg rounded-3">
                    @foreach (App\Models\User::NUMBER_TYPES as $numberType)
                        <option @selected(old('number_type') === $numberType)
                            value="{{ $numberType }}">
                            {{ $numberType }}
                        </option>
                    @endforeach
                </select>
                @error('number_type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Nomor -->
            <div>
                <label class="form-label">Nomor</label>
                <input type="number" name="number"
                    class="form-control form-control-lg rounded-3" placeholder="Masukkan Nomor"
                    value="{{ old('number') }}" />
                @error('number')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label class="form-label">Alamat</label>
                <input type="text" name="address"
                    class="form-control form-control-lg rounded-3" placeholder="Masukkan Alamat"
                    value="{{ old('address') }}" />
                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Telepon -->
            <div>
                <label class="form-label">
                    No. Telepon
                    <small class="text-muted">(contoh: 628xxx)</small>
                </label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text">+</span>
                    <input type="number" name="telephone" placeholder="Masukkan No. Telepon"
                        class="form-control rounded-end-3 font-lg"
                        value="{{ old('telephone') }}" />
                </div>
                @error('telephone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Gender -->
            <div class="text-center">
                <label class="form-label d-block mb-2">
                    Jenis Kelamin
                </label>
                <div class="d-flex justify-content-center gap-4">
                    <div class="form-check">
                        <input class="form-check-input"
                            type="radio" name="gender"
                            value="Man">
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="radio" name="gender"
                            value="Woman">
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
                @error('gender')
                    <small class="text-danger d-block mt-1">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-control form-control-lg rounded-3" />
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Konfirmasi -->
            <div>
                <label class="form-label">Konfirmasi Password</label>
                <input type="password"
                    name="password_confirmation"
                    class="form-control form-control-lg rounded-3" />
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit"
                class="btn btn-success btn-lg rounded-pill fw-semibold mt-3">
                Register
            </button>

            <!-- Login link -->
            <div class="text-center mt-2">
                <span class="text-muted">
                    Sudah punya akun?
                </span>
                <a href="{{ route('login') }}"
                    class="text-success fw-semibold">
                    Login
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
