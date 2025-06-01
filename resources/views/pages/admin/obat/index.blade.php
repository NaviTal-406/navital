@extends('layouts.admin')

@section('title', 'Drugs')

@section('content')
    <div class="bg-slate-100 h-full mt-[77px] py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex justify-between">
                    <div class="">
                        <h3 class="text-xl font-bold text-ijo mt-2">Drug Management</h3>
                        <p class="mt-1 text-ijo font-medium mb-4">Drug Management Page</p>
                    </div>
                </div>

                <div class="flex mt-2">
                    <div class="w-full">
                        <div class="bg-white rounded">
                            <div class="p-6">
                                <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                    <!-- menu start -->
                                    <div class="col-span-1">
                                        <nav aria-label="Tabs"
                                            class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-ijo p-1.5 rounded-md lg:justify-start"
                                            role="tablist">
                                            <button
                                                class="fc-tab-active:bg-white text-white font-medium hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all active"
                                                data-fc-target="#account" type="button">
                                                List Drugs
                                            </button>
                                            <button
                                                class="fc-tab-active:bg-white text-white font-medium hover:bg-white hover:text-ijo fc-tab-active:text-ijo text-start py-2 px-4 rounded bg-transparent transition-all"
                                                data-fc-target="#password" type="button">
                                                Create Drug
                                            </button>
                                        </nav>
                                    </div>
                                    <!-- menu end -->                                    

                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="account" class="min-h-[650px]">
                                            <h4 class="text-base text-ijo">Drug List</h4>

                                            <div class="mx-auto mt-5">
                                                <div class="flex flex-col">
                                                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                                        <div class="inline-block min-w-full align-middle">
                                                            <div class="overflow-hidden">
                                                                <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                                                    <thead class="bg-ijo">
                                                                        <tr>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase">
                                                                                Drug Name
                                                                            </th>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase">
                                                                                Image
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Edit</span>
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Delete</span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                                        @forelse ($drugs as $drug)
                                                                            <tr class="hover:bg-teal-50">
                                                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    {{ $drug->name }}
                                                                                </td>
                                                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                                                    <img src="{{ asset('assets/' . $drug->image) }}" 
                                                                                         alt="{{ $drug->name }}" 
                                                                                         class="h-10 w-10 object-cover rounded">
                                                                                </td>
                                                                                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                                                    <a href="{{ route('admin.drugs.edit', $drug->id) }}"
                                                                                        class="text-blue-500 hover:text-blue-800">Edit</a>
                                                                                </td>
                                                                                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                                                    <form action="{{ route('admin.drugs.destroy', $drug->id) }}"
                                                                                        method="POST" class="d-inline">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button class="text-red-400 hover:text-red-600"
                                                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @empty
                                                                            <tr>
                                                                                <td colspan="4" class="py-4 px-6 text-sm font-medium text-gray-900 text-center">
                                                                                    No drugs found
                                                                                </td>
                                                                            </tr>
                                                                        @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                @if (session('success'))
                                                    <div class="bg-green-200 border-green-600 text-green-800 border-l-4 p-4 mt-4">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif

                                                @if (session('error'))
                                                    <div class="bg-red-200 border-red-600 text-red-800 border-l-4 p-4 mt-4">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div id="password" class="hidden min-h-[650px]">
                                            <h4 class="text-base text-ijo">Create New Drug</h4>

                                            <form action="{{ route('admin.drugs.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="grid grid-cols-2 items-center gap-6 mt-6">
                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="name"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Drug Name<small class="text-red-600">*</small></label>
                                                            <input type="text"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="name" placeholder="Drug name" name="name" required>
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="image"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Image<small class="text-red-600">*</small></label>
                                                            <input type="file"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="image" name="image" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="description"
                                                            class="block text-sm font-semibold mb-1 text-ijo">Description<small class="text-red-600">*</small></label>
                                                    <textarea
                                                        class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                        id="description" name="description" rows="4" required></textarea>
                                                </div>

                                                <!-- save start -->
                                                <div class="flex mt-3">
                                                    <div class="w-full">
                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold bg-red-400 text-white hover:bg-red-500">Submit</button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection 