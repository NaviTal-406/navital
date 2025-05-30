@extends('layouts.admin')

@section('title', 'Dokter')

@section('content')
<div class="bg-slate-100 h-full mt-[77px] py-3 px-3" style="min-height: 900px;">
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-xl text-ijo font-bold mt-2">Dokter</h3>
                    <p class="mt-1 font-medium mb-4 text-ijo">Halaman Dokter</p>
                </div>

                @if (session('success'))
                    <div class="bg-green-200 border-green-600 text-green-800 border-l-4 p-4 mt-4">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <div class="flex mt-2">
                <div class="w-full">
                    <div class="bg-white rounded-3xl">
                        <div class="p-6">
                            <div class="grid lg:grid-cols-4 gap-6">
                                <!-- Sidebar Tab -->
                                <div class="col-span-1">
                                    <nav aria-label="Tabs"
                                        class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-teal-600 p-1.5 rounded-md lg:justify-start shadow-lg"
                                        role="tablist" data-fc-type="tab">
                                        <button
                                            class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all active"
                                            data-fc-target="#listDokter" type="button">
                                            List Dokter
                                        </button>
                                        <button
                                            class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all"
                                            data-fc-target="#createDokter" type="button">
                                            Tambah Dokter
                                        </button>
                                    </nav>
                                </div>

                                <!-- Content Area -->
                                <div class="lg:col-span-3 px-4">
                                    <!-- List Dokter -->
                                    <div id="listDokter" class="min-h-[650px]">
                                        <h4 class="text-base font-bold text-ijo">List Dokter</h4>
                                        <div class="mt-5 overflow-x-auto shadow-lg rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-teal-600 text-white">
                                                    <tr>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Nama</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Layanan</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Rumah Sakit</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Jadwal Praktik</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-right uppercase">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @forelse ($dokters as $dokter)
                                                        <tr>
                                                            <td class="px-6 py-4">{{ $dokter->name }}</td>
                                                            <td class="px-6 py-4">{{ $dokter->layanan->name ?? '-' }}</td>
                                                            <td class="px-6 py-4">{{ $dokter->layanan->hospital->name ?? '-' }}</td>
                                                            <td class="px-6 py-4">{{ $dokter->jadwal_praktik }}</td>
                                                            <td class="px-6 py-4 text-right">
                                                                <form action="{{ route('dashboard.dokter.destroy', $dokter->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button onclick="return confirm('Hapus dokter ini?')" class="text-red-600 hover:text-red-800">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data dokter.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Form Tambah Dokter -->
                                    <div id="createDokter" class="hidden min-h-[650px]">
                                        <h4 class="text-base font-bold text-ijo">Tambah Dokter</h4>
                                        <form action="{{ route('dashboard.dokter.store') }}" method="POST" class="mt-5">
                                            @csrf

                                            <!-- Rumah Sakit -->
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Rumah Sakit</label>
                                                <select id="hospitalSelect" name="hospital_id" required class="w-full rounded border border-gray-300 px-4 py-2">
                                                    <option value="">-- Pilih Rumah Sakit --</option>
                                                    @foreach ($hospitals as $hospital)
                                                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Layanan (akan diisi via AJAX) -->
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Layanan</label>
                                                <select id="layananSelect" name="layanan_id" required class="w-full rounded border border-gray-300 px-4 py-2">
                                                    <option value="">-- Pilih Layanan --</option>
                                                </select>
                                            </div>

                                            <!-- Nama Dokter -->
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Nama Dokter</label>
                                                <input type="text" name="name" required class="w-full rounded border border-gray-300 px-4 py-2">
                                            </div>

                                            <!-- Jadwal Praktik -->
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Jadwal Praktik</label>
                                                <input type="text" name="jadwal_praktik" required placeholder="Senin - Rabu, 08.00 - 14.00"
                                                    class="w-full rounded border border-gray-300 px-4 py-2">
                                            </div>

                                            <button type="submit"
                                                class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all bg-red-500 text-white hover:bg-red-400">
                                                Submit
                                            </button>
                                        </form>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hospitalSelect = document.getElementById('hospitalSelect');
        const layananSelect = document.getElementById('layananSelect');

        hospitalSelect.addEventListener('change', function () {
            const hospitalId = this.value;

            // Kosongkan dulu layanan
            layananSelect.innerHTML = '<option value="">-- Pilih Layanan --</option>';

            if (hospitalId) {
                fetch(`/dashboard/get-layanan-by-hospital/${hospitalId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(layanan => {
                            const option = document.createElement('option');
                            option.value = layanan.id;
                            option.textContent = layanan.name;
                            layananSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        });
    });
</script>
@endpush
