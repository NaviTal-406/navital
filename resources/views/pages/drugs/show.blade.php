@extends('layouts.app')

@section('title', 'Detail Obat')

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                @if($drug->image)
                    {{-- Kontainer gambar tanpa tinggi tetap --}}
                    {{-- Gambar akan menentukan tinggi kontainer ini, dengan max-width 100% --}}
                    <div class="w-full relative overflow-hidden flex items-center justify-center p-4"> {{-- Ditambahkan p-4 untuk padding agar gambar tidak terlalu menempel --}}
                        <img src="{{ asset($drug->image) }}"
                             alt="{{ $drug->name }}"
                             class="max-w-full object-contain"> {{-- max-h-full dihilangkan karena tinggi kontainer fleksibel --}}
                    </div>
                @endif

                <div class="p-8">
                    <h1 class="text-3xl font-bold text-biru mb-6">{{ $drug->name }}</h1>

                    <div class="prose max-w-none">
                        <p class="text-gray-600 leading-relaxed mb-8">
                            {{ $drug->description }}
                        </p>
                    </div>

                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700">
                                    <span class="font-bold">Peringatan:</span> Informasi ini hanya untuk tujuan edukasi. Selalu konsultasikan dengan profesional kesehatan sebelum menggunakan obat apapun.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 border-t pt-6">
                        <a href="{{ route('drugs.index') }}"
                           class="inline-flex items-center text-biru hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                            Kembali ke Bank Obat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection