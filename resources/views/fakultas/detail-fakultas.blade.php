<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="mb-4">
            <h2 class="fw-bold mb-1">Detail Fakultas</h2>
            <p class="text-muted mb-0">
                Informasi lengkap data fakultas.
            </p>
        </div>

        {{-- Card Detail --}}
        <div class="card border-0 shadow-sm">
            <div class="card-body">

                <table class="table table-borderless align-middle mb-0">
                    <tbody>

                        <tr>
                            <th width="220" class="text-secondary">
                                Nama Fakultas
                            </th>

                            <td width="20">:</td>

                            <td class="fw-semibold">
                                {{ $fakultas->nama_fakultas }}
                            </td>
                        </tr>

                        <tr>
                            <th class="text-secondary">
                                Nama Dekan
                            </th>

                            <td>:</td>

                            <td>
                                {{ $fakultas->nama_dekan }}
                            </td>
                        </tr>

                    </tbody>
                </table>

                {{-- Action Button --}}
                <div class="mt-4 d-flex gap-2">

                    <a href="/fakultas/{{ $fakultas->id }}/edit"
                        class="btn btn-warning text-white">
                        Edit
                    </a>

                    <a href="/fakultas"
                        class="btn btn-outline-secondary">
                        Kembali
                    </a>

                </div>

            </div>
        </div>

    </div>
</x-layout>