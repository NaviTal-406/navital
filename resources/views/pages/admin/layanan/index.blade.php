@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')
<div class="bg-slate-100 h-full mt-[77px] py-3 px-3" style="min-height: 900px;">
    <section class="relative overflow-hidden">
        <div class="container">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-xl text-ijo font-bold mt-2">Layanan</h3>
                    <p class="mt-1 font-medium mb-4 text-ijo">Halaman Layanan</p>
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
                            <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                <!-- Tab Menu -->
                                <div class="col-span-1">
                                    <nav class="flex flex-row lg:flex-col gap-2 bg-teal-600 p-1.5 rounded-md shadow-lg">
                                        <button class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo py-2 px-4 rounded bg-transparent transition-all active" data-fc-target="#account" type="button">
                                            List Layanan
                                        </button>
                                        <button class="fc-tab-active:bg-white font-medium text-white hover:bg-white hover:text-ijo fc-tab-active:text-ijo py-2 px-4 rounded bg-transparent transition-all" data-fc-target="#password" type="button">
                                            Create New Layanan
                                        </button>
                                    </nav>
                                </div>

                                <!-- Content -->
                                <div class="lg:col-span-3 px-4">
                                    <!-- List -->
                                    <div id="account" class="min-h-[650px]">
                                        <h4 class="text-base font-bold text-ijo">List Layanan</h4>
                                        <div class="mt-5 overflow-x-auto shadow-lg rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-teal-600 text-white">
                                                    <tr>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Layanan Name</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-left uppercase">Rumah Sakit</th>
                                                        <th class="py-3 px-6 text-xs font-bold text-right uppercase">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @foreach ($layanans as $layanan)
                                                        <tr>
                                                            <td class="px-6 py-4">{{ $layanan->name }}</td>
                                                            <td class="px-6 py-4">{{ $layanan->hospital->name }}</td>
                                                            <td class="px-6 py-4 text-right">
                                                                <form action="{{ route('dashboard.layanan.destroy', $layanan->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button onclick="return confirm('Hapus layanan ini?')" class="text-red-600 hover:text-red-800">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Create -->
                                    <div id="password" class="hidden min-h-[650px]">
                                        <h4 class="text-base font-bold text-ijo">Tambah Layanan</h4>
                                        <form action="{{ route('dashboard.layanan.store') }}" method="POST" class="mt-5">
                                            @csrf
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Nama Layanan</label>
                                                <input type="text" name="name" required class="w-full rounded border border-gray-300 px-4 py-2">
                                            </div>
                                            <div class="mb-4">
                                                <label class="block text-sm font-semibold mb-1 text-ijo">Rumah Sakit</label>
                                                <select name="hospital_id" class="w-full rounded border border-gray-300 px-4 py-2" required>
                                                    @foreach ($hospitals as $hospital)
                                                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit"
                                                class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all bg-red-500 text-white hover:bg-red-400">Submit
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
