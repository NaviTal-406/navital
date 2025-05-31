@extends('layouts.app')

@section('title', 'Bank Obat')

@section('content')
    <div class="flex flex-col min-h-screen">
        <main class="flex-grow">
            <section class="py-24">
                <div class="container">
                    <div class="relative overflow-hidden">
                        <div class="max-w-[85rem] mx-auto px-4">
                            <div class="text-center">
                                <div class="relative flex justify-between items-center">
                                    <div class="">
                                        <span class="text-3xl font-bold text-biru">
                                            Bank Obat
                                        </span>
                                    </div>
                                    <div class="relative z-10 flex space-x-3 p-3">
                                        <div class="flex-[1_0_0%]">
                                            <input type="text" 
                                                   id="searchInput" 
                                                   class="py-2.5 px-4 block w-full border-2 rounded-lg border-teal-600 placeholder:text-gray-500 text-gray-500"
                                                   placeholder="Cari obat...">
                                        </div>
                                        <div class="flex-[0_0_auto]">
                                            <button type="button" class="w-[46px] h-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border bg-red-400 text-white hover:bg-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 justify-center my-8">
                        @foreach(range('A', 'Z') as $letter)
                            <button 
                                class="letter-filter px-4 py-2 rounded-md text-sm font-medium text-gray-700 bg-gray-100 hover:bg-red-400 hover:text-white transition-colors"
                                data-letter="{{ $letter }}"
                            >
                                {{ $letter }}
                            </button>
                        @endforeach
                    </div>

                    <div id="loadingIndicator" class="hidden">
                        <div class="flex justify-center items-center py-8">
                            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500"></div>
                        </div>
                    </div>

                    <div id="searchResults" class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14">
                        </div>
                </div>
            </section>
        </main>
    </div>
@endsection

@push('after-script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const loadingIndicator = document.getElementById('loadingIndicator');
    let searchTimeout;

    // Load initial data
    loadInitialData();

    // Search functionality
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const query = this.value.trim();
        
        if (query.length > 0) {
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300); // Debounce search
        } else {
            loadInitialData(); // Load all if search is cleared
             // Reset active letter filter if search is cleared
            document.querySelectorAll('.letter-filter.bg-red-400').forEach(btn => {
                btn.classList.remove('bg-red-400', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });
        }
    });

    // Letter filter functionality
    document.querySelectorAll('.letter-filter').forEach(button => {
        button.addEventListener('click', function() {
            const letter = this.dataset.letter;
            searchInput.value = ''; // Clear search input when letter filter is used
            searchByLetter(letter);
            
            // Update active state for letter filters
            document.querySelectorAll('.letter-filter').forEach(btn => {
                btn.classList.remove('bg-red-400', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });
            this.classList.remove('bg-gray-100', 'text-gray-700');
            this.classList.add('bg-red-400', 'text-white');
        });
    });

    async function loadInitialData() {
        showLoading();
        try {
            const response = await fetch('/drugs/all'); // Ganti dengan endpoint Anda yang sesuai
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            displayResults(data);
        } catch (error) {
            console.error('Error loading initial drugs:', error);
            searchResults.innerHTML = `
                <div class="col-span-full text-center">
                    <p class="text-red-500 mb-2">Error memuat data obat. Silakan coba lagi.</p>
                    <p class="text-gray-600 text-sm">Detail: ${error.message}</p>
                </div>`;
        }
        hideLoading();
    }

    async function performSearch(query) {
        showLoading();
         // Reset active letter filter if search is used
        document.querySelectorAll('.letter-filter.bg-red-400').forEach(btn => {
            btn.classList.remove('bg-red-400', 'text-white');
            btn.classList.add('bg-gray-100', 'text-gray-700');
        });
        try {
            const response = await fetch(`/drugs/search?query=${encodeURIComponent(query)}`); // Ganti dengan endpoint Anda
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            displayResults(data);
        } catch (error) {
            console.error('Error searching drugs:', error);
            searchResults.innerHTML = `
                <div class="col-span-full text-center">
                     <p class="text-red-500 mb-2">Error mencari obat. Silakan coba lagi.</p>
                     <p class="text-gray-600 text-sm">Detail: ${error.message}</p>
                </div>`;
        }
        hideLoading();
    }

    async function searchByLetter(letter) {
        showLoading();
        try {
            const response = await fetch(`/drugs/letter/${letter}`); // Ganti dengan endpoint Anda
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            displayResults(data);
        } catch (error) {
            console.error('Error fetching drugs by letter:', error);
            searchResults.innerHTML = `
                <div class="col-span-full text-center">
                    <p class="text-red-500 mb-2">Error memuat obat berdasarkan huruf. Silakan coba lagi.</p>
                    <p class="text-gray-600 text-sm">Detail: ${error.message}</p>
                </div>`;
        }
        hideLoading();
    }

    function displayResults(drugs) {
        if (!Array.isArray(drugs)) {
            console.error('Invalid data format received:', drugs);
            searchResults.innerHTML = '<p class="col-span-full text-center text-red-500">Format data tidak valid.</p>';
            return;
        }

        if (drugs.length === 0) {
            searchResults.innerHTML = '<p class="col-span-full text-center text-gray-500">Tidak ada obat yang ditemukan.</p>';
            return;
        }

        searchResults.innerHTML = drugs.map(drug => {
            const drugId = drug.id || Date.now(); // Fallback ID jika tidak ada
            const drugName = String(drug.name || 'Nama Obat Tidak Tersedia');
            const drugDescription = String(drug.description || 'Deskripsi tidak tersedia.');
            
            // HTML escape untuk atribut alt
            const safeAltText = drugName.replace(/"/g, "&quot;").replace(/'/g, "&#39;");

            let imageHtml;
            if (drug.image && typeof drug.image === 'string' && drug.image.trim() !== '') {
                const imageName = String(drug.image).trim();
                // Escape nama file gambar untuk digunakan dalam string JavaScript di atribut onerror
                const jsEscapedImageName = imageName.replace(/\\/g, '\\\\').replace(/'/g, "\\'");
                // Escape alt text untuk digunakan dalam string JavaScript di atribut onerror
                const jsEscapedAltText = safeAltText.replace(/\\/g, '\\\\').replace(/'/g, "\\'");

                const primarySrc = `/${imageName}`; // Path utama
                const fallbackSrc = `/storage/${jsEscapedImageName}`; // Path fallback (nama file sudah di-escape untuk JS)
                
                imageHtml = `
                <div class="w-full h-[200px] overflow-hidden">
                    <img src="${primarySrc}" 
                         alt="${safeAltText}" 
                         class="w-full h-full object-cover"
                         onerror="this.onerror=null; this.src='${fallbackSrc}'; this.alt='${jsEscapedAltText} (fallback)';">
                </div>`;
            } else {
                // Placeholder jika tidak ada gambar
                imageHtml = `
                <div class="w-full h-[200px] overflow-hidden flex items-center justify-center bg-gray-100 text-gray-400">
                    <span>Gambar tidak tersedia</span>
                </div>`;
            }

            return `
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                ${imageHtml}
                <div class="p-6 flex flex-col flex-grow">
                    <h1 class="text-lg font-semibold mb-3 text-biru hover:text-blue-800">
                        ${drugName}
                    </h1>
                    <p class="text-sm/relaxed tracking-wider text-gray-500 line-clamp-3 mb-4 flex-grow">
                        ${drugDescription}
                    </p>
                    <a href="/drugs/${drugId}" class="text-biru font-bold text-sm hover:text-blue-800 self-start mt-auto">
                        Lihat Detail →
                    </a>
                </div>
            </div>`;
        }).join('');
    }

    function showLoading() {
        loadingIndicator.classList.remove('hidden');
        searchResults.innerHTML = ''; // Kosongkan hasil saat loading
    }

    function hideLoading() {
        loadingIndicator.classList.add('hidden');
    }
});
</script>
@endpush