@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Foods</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href={{ route('admin.addproducts') }} class="btn btn-primary">New Product</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Food Image</th>
                                <th>Food Item</th>
                                <th>Price</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if ($item->product_image)
                                            <img src="{{ asset('storage/' . $item->product_image) }}" alt="Icon"
                                                class="category-icon rounded-circle border border-grey"
                                                style="max-width: 50px; max-height: 50px;">
                                        @else
                                            No Icon
                                        @endif
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>Rs.{{ $item->price }}</td>
                                    <td>{{ $item->item }}</td>
                                    <td>{{ $item->category->name }}</td>

                                    <td>
                                        <a href="{{ url('admin/editproduct/' . $item->id) }}">
                                            <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href={{ route('admin.deleteproduct', $item->id) }} id="delete"
                                            class="delete-link text-danger w-4 h-4 mr-1">
                                            <svg wire:loading.remove.delay="" wire:target=""
                                                class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path ath fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                        @if (session('alert-type') == 'success')
                            <div class="alert alert-success" id="success-alert">
                                {{ session('message') }}
                            </div>

                            <script>
                                setTimeout(function() {
                                    var successAlert = document.getElementById('success-alert');
                                    if (successAlert) {
                                        successAlert.style.display = 'none';
                                    }
                                }, 2000); // 2000 milliseconds = 2 seconds
                            </script>
                        @endif
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <div class="d-flex justify-content-end">
                        <div class="pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection