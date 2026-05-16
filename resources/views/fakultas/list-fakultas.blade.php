<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Fakultas</h2>
                <small class="text-muted">
                    List seluruh fakultas
                </small>
            </div>

            <a href="/fakultas/create" class="btn btn-primary">
                + Tambah Fakultas
            </a>
        </div>

        {{-- Card --}}
        <div class="card border-0 shadow-sm">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th width="80">No</th>
                                <th>Fakultas</th>
                                <th>Dekan</th>
                                <th width="320">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($fakultas as $item)
                                <tr>
                                    <td>
                                        <span class="badge bg-secondary">
                                            {{ $loop->iteration }}
                                        </span>
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $item->nama_fakultas }}
                                    </td>

                                    <td>
                                        {{ $item->nama_dekan }}
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2 flex-wrap">

                                            <a href="/fakultas/{{ $item->id }}/edit"
                                                class="btn btn-sm btn-warning text-white">
                                                Edit
                                            </a>

                                            <a href="/fakultas/{{ $item->id }}"
                                                class="btn btn-sm btn-info text-white">
                                                Detail
                                            </a>

                                            <form action="/fakultas/{{ $item->id }}"
                                                method="post"
                                                onsubmit="return confirm('Yakin ingin menghapus data?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn btn-sm btn-danger">
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">
                                        Data fakultas belum tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</x-layout>