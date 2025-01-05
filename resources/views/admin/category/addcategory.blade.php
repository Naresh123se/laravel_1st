@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <h1 class="text-primary">Create Category</h1>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('admin.category') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{ route('admin.storecategory') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Category Details</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Category Name -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name" value="{{ old('name') }}">
                                <label for="name">Category Name</label>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Category Icon -->
                        <div class="col-md-6">
                            <label for="category_icon" class="form-label">Category Icon</label>
                            <input type="file" name="category_icon" id="category_icon" class="form-control @error('category_icon') is-invalid @enderror" accept="image/*">
                            @error('category_icon')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">
                        <i class="fas fa-save"></i> Create
                    </button>
                    <a href="{{ route('admin.category') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
