@extends('layouts.admin')

@section('title', 'Edit Drug')

@section('content')
    <div class="bg-slate-100 h-full mt-[77px] py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-ijo mt-2">Drug Management</h3>
                        <p class="mt-1 font-medium text-ijo mb-4">Edit Drug</p>
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
                                            <a href="{{ route('admin.drugs.index') }}"
                                                class="text-ijo p-3 font-semibold hover:text-white bg-white hover:bg-teal-400 rounded-lg">Back</a>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="edit-drug" class="min-h-[650px]">
                                            <h4 class="text-base text-ijo">Update Drug Data</h4>

                                            <form action="{{ route('admin.drugs.update', $drug->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="grid grid-cols-2 items-center gap-6 mt-6">
                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="name"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Drug Name<small class="text-red-500">*</small></label>
                                                            <input type="text"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="name" placeholder="Drug name" name="name"
                                                                value="{{ $drug->name }}" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            @if($drug->image)
                                                                <img src="{{ asset('storage/' . $drug->image) }}"
                                                                    alt="{{ $drug->name }}" class="w-20 h-20 object-cover rounded mb-2">
                                                            @endif

                                                            <label for="image"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Image</label>
                                                            <input type="file"
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="image" name="image">
                                                            <small class="text-gray-500">Leave empty to keep the current image</small>
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class="mb-4">
                                                            <label for="description"
                                                                class="block text-sm font-semibold mb-1 text-ijo">Description<small class="text-red-500">*</small></label>
                                                            <textarea
                                                                class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                                id="description" name="description" rows="5" required>{{ $drug->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- save start -->
                                                <div class="flex mt-3">
                                                    <div class="w-full">
                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all bg-red-400 hover:bg-red-500 text-white">Update Drug</button>
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