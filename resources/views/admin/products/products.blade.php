@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold">Foods</h1>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <a href="{{ route('admin.addproducts') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> New Product
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-light">
                    <div class="d-flex justify-content-end">
                        <div class="input-group w-25">
                            <input type="text" name="table_search" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-outline-secondary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if ($item->product_image)
                                            <img src="{{ asset('storage/' . $item->product_image) }}" alt="Image"
                                                class="rounded-circle border" style="width: 50px; height: 50px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>Rs.{{ number_format($item->price, 2) }}</td>
                                    <td>{{ $item->item }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/editproduct/' . $item->id) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('admin.deleteproduct', $item->id) }}" 
                                           class="btn btn-sm btn-outline-danger delete-link" 
                                           id="delete">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-light">
                    <div class="d-flex justify-content-end">
                        {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('alert-type') == 'success')
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast align-items-center text-white bg-success border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        </div>

        <script>
            const toastEl = document.querySelector('.toast');
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        </script>
    @endif
@endsection
