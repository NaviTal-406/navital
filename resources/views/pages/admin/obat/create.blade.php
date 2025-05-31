@extends('layouts.admin')

@section('title', 'Create Drug')

@section('content')
    <section class="position-relative overflow-hidden py-3 px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-between mt-5">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Create New Drug</h4>
                        </div>
                    </div>

                    <form action="{{ route('admin.drugs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Drug Name</label>
                                    <input type="text" required class="form-control" id="name" name="name"
                                        placeholder="Enter drug name" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image <span class="text-danger">(1MB)</span></label>
                                    <input type="file" required class="form-control" id="image" name="image"
                                        accept="image/*" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4"
                                        placeholder="Enter drug description" required></textarea>
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary">Add Drug</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-style')
    <style>
        .w-button-custom {
            width: auto;
        }

        .uploader {
            position: relative;
            overflow: hidden;
            width: 50%;
            min-height: 75px;
            background: #ffffff;
            border-radius: 10px;
            border: 2px dashed #e8e8e8;
        }

        @media (min-width:280px) and (max-width: 576px) {
            .w-button-custom {
                width: 100%;
            }

            .uploader {
                width: 100%;
            }
        }

        .uploader .image-uploader {
            width: 75px;
            max-height: 75px;
            object-fit: cover;
            object-position: center;
        }

        #filePhoto {
            position: absolute;
            border-radius: 15px;
            width: 105px;
            height: 75px;
            left: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .uploader img {
            border-radius: 10px;
            object-position: center;
            object-fit: cover;
            width: 105px;
            height: 75px;
            border: none;
        }
    </style>
@endpush 