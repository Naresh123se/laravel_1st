@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid my-3">
        <div class="row mb-2 align-items-center">
            <div class="col-sm-6">
                <h1 class="font-weight-bold text-dark">Categories</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.addcategory') }}" class="btn btn-primary btn-lg shadow">
                    <i class="fas fa-plus mr-2"></i> New Category
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="card-title font-weight-bold text-secondary">Category List</h5>
                <div class="card-tools">
                    <div class="input-group rounded-pill shadow-sm" style="width: 300px;">
                        <input type="text" name="table_search" class="form-control border-0" placeholder="Search categories...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary rounded-pill">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover text-center table-striped table-bordered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th width="60">S.N</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th width="120">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                @if($item->category_icon)
                                <img src="{{ asset('storage/' . $item->category_icon) }}" 
                                     alt="Icon" 
                                     class="img-thumbnail rounded-circle" 
                                     style="width: 50px; height: 50px;">
                                @else
                                <span class="text-muted">No Icon</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.editcategory', $item->id) }}" class="btn btn-sm btn-outline-primary mr-1" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('admin.deletecategory', $item->id) }}" id="delete" class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-footer bg-white d-flex justify-content-end">
                    {{ $category->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</section>

@if(session('alert-type') == 'success')
<div class="alert alert-success alert-dismissible fade show shadow-sm mt-3" role="alert" id="success-alert">
    <i class="fas fa-check-circle mr-2"></i> {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
    setTimeout(function(){
        $('#success-alert').alert('close');
    }, 3000);
</script>
@endif

@endsection
