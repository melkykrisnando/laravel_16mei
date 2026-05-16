<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="mb-4">
            <h2 class="fw-bold mb-1">Tambah Fakultas</h2>
            <p class="text-muted mb-0">
                Silakan isi data fakultas dengan lengkap.
            </p>
        </div>

        {{-- Card Form --}}
        <div class="card border-0 shadow-sm">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/fakultas" method="POST">
                    @csrf

                    {{-- Nama Fakultas --}}
                    <div class="mb-3">
                        <label for="nama_fakultas" class="form-label fw-semibold">
                            Nama Fakultas
                        </label>

                        <input
                            type="text"
                            id="nama_fakultas"
                            name="nama_fakultas"
                            class="form-control"
                            placeholder="Contoh: Fakultas Teknik"
                           >
                    </div>

                    {{-- Nama Dekan --}}
                    <div class="mb-4">
                        <label for="nama_dekan" class="form-label fw-semibold">
                            Nama Dekan
                        </label>

                        <input
                            type="text"
                            id="nama_dekan"
                            name="nama_dekan"
                            class="form-control"
                            placeholder="Contoh: Dr. Budi Santoso"
                            >
                    </div>

                    {{-- Action Button --}}
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="/fakultas" class="btn btn-outline-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</x-layout>